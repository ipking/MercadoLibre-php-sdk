<?php


namespace MercadoLibre\Native\UploadMessageAttachment;

use MercadoLibre\Native\NativeErrorMsg;
use MercadoLibre\Native\NativeResponse;

/**
 * @property string id
 */
class UploadMessageAttachmentResponse extends NativeResponse{
	public function __construct($result,$errors, $message = 'success', $data = []) {
		$msg = NativeErrorMsg::getMsg($errors);
		$msg and $message = $msg;
		parent::__construct($result,$errors, $message, $data, array(
			'id' => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
		));
	}
}
