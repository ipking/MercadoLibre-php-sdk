<?php


namespace MercadoLibre\GlobalSelling\Shipments;

use MercadoLibre\GlobalSelling\GlobalSellingErrorMsg;
use MercadoLibre\GlobalSelling\GlobalSellingResponse;

/**
 * @property string text
 */
class ShipmentsResponse extends GlobalSellingResponse{
	public function __construct($result,$errors, $message = 'success', $data = []) {
		$msg = GlobalSellingErrorMsg::getMsg($errors);
		$msg and $message = $msg;
		parent::__construct($result,$errors, $message, $data, array(
			'text'       => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
		));
	}
}
