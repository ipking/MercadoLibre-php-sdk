<?php


namespace MercadoLibre\NativeSelling\ClaimsEvidencesPost;



use MercadoLibre\NativeSelling\ClaimsEvidencesGet\Model\Evidence;
use MercadoLibre\Base\BaseErrorMsg;
use MercadoLibre\Base\BaseResponse;

/**
 * @property Evidence[] evidences
 */
class ClaimsEvidencesPostResponse extends BaseResponse{
	public function __construct($result,$errors, $message = 'success', $data = []) {
		$msg = BaseErrorMsg::getMsg($errors);
		$msg and $message = $msg;
		parent::__construct($result,$errors, $message, $data, array(
			'evidences' => [self::PARAM_TYPE_ARRAY, self::PARAM_OPTIONAL, Evidence::class],
		));
	}
}
