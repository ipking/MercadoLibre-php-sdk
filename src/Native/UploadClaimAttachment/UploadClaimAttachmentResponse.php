<?php


namespace MercadoLibre\Native\UploadClaimAttachment;

use MercadoLibre\Native\NativeErrorMsg;
use MercadoLibre\Native\NativeResponse;

/**
 * @property string user_id
 * @property string filename
 * @property string render_url
 */
class UploadClaimAttachmentResponse extends NativeResponse{
	public function __construct($result,$errors, $message = 'success', $data = []) {
		$msg = NativeErrorMsg::getMsg($errors);
		$msg and $message = $msg;
		parent::__construct($result,$errors, $message, $data, array(
			'user_id'    => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'filename'   => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'render_url' => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
		));
	}
}
