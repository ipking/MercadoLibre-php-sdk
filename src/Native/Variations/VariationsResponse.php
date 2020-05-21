<?php
/**
 * 产品变体的响应
 */

namespace MercadoLibre\Native\Variations;
use MercadoLibre\Native\NativeErrorMsg;
use MercadoLibre\Native\NativeResponse;
use MercadoLibre\Native\Variations\Model\Variation;

/**
 * @property Variation variation
 */
class VariationsResponse extends NativeResponse{
	public function __construct($result,$errors, $message = 'success', $data = []) {
		$msg = NativeErrorMsg::getMsg($errors);
		$msg and $message = $msg;
		parent::__construct($result,$errors, $message, $data, array(
			'variation'   => [self::PARAM_TYPE_OBJECT, self::PARAM_OPTIONAL,Variation::class],
		));
	}
}