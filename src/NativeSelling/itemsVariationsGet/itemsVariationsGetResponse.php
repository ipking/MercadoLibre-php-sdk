<?php
/**
 * 产品变体的响应
 */

namespace MercadoLibre\NativeSelling\itemsVariationsGet;
use MercadoLibre\NativeSelling\itemsVariationsGet\Model\Variation;
use MercadoLibre\NativeSelling\NativeSellingErrorMsg;
use MercadoLibre\NativeSelling\NativeSellingResponse;

/**
 * @property Variation variation
 */
class itemsVariationsGetResponse extends NativeSellingResponse{
	public function __construct($result,$errors, $message = 'success', $data = []) {
		$msg = NativeSellingErrorMsg::getMsg($errors);
		$msg and $message = $msg;
		parent::__construct($result,$errors, $message, $data, array(
			'variation'   => [self::PARAM_TYPE_OBJECT, self::PARAM_OPTIONAL,Variation::class],
		));
	}
}
