<?php
/**
 * 产品图片的响应
 */

namespace MercadoLibre\GlobalSelling\Pictures;
use MercadoLibre\GlobalSelling\GlobalSellingErrorMsg;
use MercadoLibre\GlobalSelling\GlobalSellingResponse;
use MercadoLibre\GlobalSelling\Pictures\Model\Variation;

/**
 * @property string id
 * @property string max_size
 * @property Variation[] variations
 */
class PicturesResponse extends GlobalSellingResponse{
	public function __construct($result,$errors, $message = 'success', $data = []) {
		$msg = GlobalSellingErrorMsg::getMsg($errors);
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
