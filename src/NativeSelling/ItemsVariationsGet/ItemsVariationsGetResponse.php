<?php
/**
 * 产品变体的响应
 */

namespace MercadoLibre\NativeSelling\ItemsVariationsGet;
use MercadoLibre\NativeSelling\ItemsVariationsGet\Model\Variation;
use MercadoLibre\Base\BaseErrorMsg;
use MercadoLibre\Base\BaseResponse;

/**
 * @property Variation variation
 */
class itemsVariationsGetResponse extends BaseResponse{
	public function __construct($result,$errors, $message = 'success', $data = []) {
		$msg = BaseErrorMsg::getMsg($errors);
		$msg and $message = $msg;
		parent::__construct($result,$errors, $message, $data, array(
			'variation'   => [self::PARAM_TYPE_OBJECT, self::PARAM_OPTIONAL,Variation::class],
		));
	}
}
