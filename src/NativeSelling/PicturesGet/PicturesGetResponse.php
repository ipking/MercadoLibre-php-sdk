<?php
/**
 * 产品图片的响应
 */

namespace MercadoLibre\NativeSelling\PicturesGet;
use MercadoLibre\Base\BaseErrorMsg;
use MercadoLibre\Base\BaseResponse;
use MercadoLibre\NativeSelling\PicturesGet\Model\Variation;

/**
 * @property string id
 * @property string max_size
 * @property Variation[] variations
 */
class PicturesGetResponse extends BaseResponse{
	public function __construct($result,$errors, $message = 'success', $data = []) {
		$msg = BaseErrorMsg::getMsg($errors);
		$msg and $message = $msg;
		parent::__construct($result,$errors, $message, $data, array(
			'id'         => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'max_size'   => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'variations' => [self::PARAM_TYPE_ARRAY, self::PARAM_OPTIONAL, Variation::class],
		));
	}
	
	public function getUrlBySize($size='') {
		$size = $size?:$this->max_size;
		foreach($this->variations as $var){
			if($var->size == $size){
				return $var->secure_url;
			}
		}
		
		return false;
	}
}
