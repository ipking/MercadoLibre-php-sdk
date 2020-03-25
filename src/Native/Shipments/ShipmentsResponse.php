<?php


namespace MercadoLibre\Native\Shipments;

use MercadoLibre\Native\NativeErrorMsg;
use MercadoLibre\Native\NativeResponse;

/**
 * @property string text
 */
class ShipmentsResponse extends NativeResponse{
	public function __construct($result,$errors, $message = 'success', $data = []) {
		$msg = NativeErrorMsg::getMsg($errors);
		$msg and $message = $msg;
		parent::__construct($result,$errors, $message, $data, array(
			'text'       => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
		));
	}
}
