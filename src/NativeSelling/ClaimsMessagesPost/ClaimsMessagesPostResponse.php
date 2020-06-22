<?php


namespace MercadoLibre\NativeSelling\ClaimsMessagesPost;
use MercadoLibre\NativeSelling\NativeSellingErrorMsg;
use MercadoLibre\NativeSelling\NativeSellingResponse;

/**
 * @property string id
 */
class ClaimsMessagesPostResponse extends NativeSellingResponse{
	public function __construct($result,$errors, $message = 'success', $data = []) {
		$msg = NativeSellingErrorMsg::getMsg($errors);
		$msg and $message = $msg;
		parent::__construct($result,$errors, $message, $data, array(
			'id' => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
		));
	}
}
