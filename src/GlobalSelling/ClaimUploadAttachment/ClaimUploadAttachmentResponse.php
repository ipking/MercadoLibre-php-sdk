<?php


namespace MercadoLibre\GlobalSelling\ClaimUploadAttachment;

use MercadoLibre\GlobalSelling\GlobalSellingErrorMsg;
use MercadoLibre\GlobalSelling\GlobalSellingResponse;

/**
 * @property string user_id
 * @property string filename
 * @property string render_url
 */
class ClaimUploadAttachmentResponse extends GlobalSellingResponse{
	public function __construct($result,$errors, $message = 'success', $data = []) {
		$msg = GlobalSellingErrorMsg::getMsg($errors);
		$msg and $message = $msg;
		parent::__construct($result,$errors, $message, $data, array(
			'user_id'    => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'filename'   => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'render_url' => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
		));
	}
}
