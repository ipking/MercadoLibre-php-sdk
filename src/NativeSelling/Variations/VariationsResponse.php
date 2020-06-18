<?php
/**
 * 产品变体的响应
 */

namespace MercadoLibre\NativeSelling\Variations;
use MercadoLibre\NativeSelling\NativeSellingErrorMsg;
use MercadoLibre\NativeSelling\NativeSellingResponse;
use MercadoLibre\NativeSelling\Variations\Model\Variation;

/**
 * @property Variation variation
 */
class VariationsResponse extends NativeSellingResponse{
	public function __construct($result,$errors, $message = 'success', $data = []) {
		$msg = NativeSellingErrorMsg::getMsg($errors);
		$msg and $message = $msg;
		parent::__construct($result,$errors, $message, $data, array(
			'variation'   => [self::PARAM_TYPE_OBJECT, self::PARAM_OPTIONAL,Variation::class],
		));
	}
}
