<?php


namespace MercadoLibre\NativeSelling\ClaimsAttachmentsPost;

use MercadoLibre\NativeSelling\NativeSellingErrorMsg;
use MercadoLibre\NativeSelling\NativeSellingResponse;

/**
 * @property string user_id
 * @property string filename
 * @property string render_url
 */
class ClaimsAttachmentsPostResponse extends NativeSellingResponse{
	public function __construct($result,$errors, $message = 'success', $data = []) {
		$msg = NativeSellingErrorMsg::getMsg($errors);
		$msg and $message = $msg;
		parent::__construct($result,$errors, $message, $data, array(
			'user_id'    => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'filename'   => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'render_url' => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
		));
	}
}
