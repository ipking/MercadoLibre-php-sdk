<?php


namespace MercadoLibre\Native\GetClaimAttachment;

use MercadoLibre\Native\NativeErrorMsg;
use MercadoLibre\Native\NativeResponse;

/**
 * @property string filename
 * @property string original_filename
 * @property string size
 * @property string date_created
 * @property string type
 * @property string file_url
 */
class GetClaimAttachmentResponse extends NativeResponse{
	public function __construct($result,$errors, $message = 'success', $data = []) {
		$msg = NativeErrorMsg::getMsg($errors);
		$msg and $message = $msg;
		parent::__construct($result,$errors, $message, $data, array(
			'filename'          => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'original_filename' => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'size'              => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'date_created'      => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'type'              => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'file_url'          => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
		));
	}
}
