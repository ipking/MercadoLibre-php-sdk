<?php


namespace MercadoLibre\NativeSelling\ClaimsAttachmentsPost;

use MercadoLibre\Base\BaseErrorMsg;
use MercadoLibre\Base\BaseResponse;

/**
 * @property string user_id
 * @property string filename
 * @property string render_url
 */
class ClaimsAttachmentsPostResponse extends BaseResponse{
	public function __construct($result,$errors, $message = 'success', $data = []) {
		$msg = BaseErrorMsg::getMsg($errors);
		$msg and $message = $msg;
		parent::__construct($result,$errors, $message, $data, array(
			'user_id'    => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'filename'   => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'render_url' => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
		));
	}
}
