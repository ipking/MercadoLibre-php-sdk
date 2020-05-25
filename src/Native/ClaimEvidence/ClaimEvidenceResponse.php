<?php


namespace MercadoLibre\Native\ClaimEvidence;



use MercadoLibre\Native\ClaimEvidenceList\Model\Evidence;
use MercadoLibre\Native\NativeErrorMsg;
use MercadoLibre\Native\NativeResponse;

/**
 * @property Evidence[] evidences
 */
class ClaimEvidenceResponse extends NativeResponse{
	public function __construct($result,$errors, $message = 'success', $data = []) {
		$msg = NativeErrorMsg::getMsg($errors);
		$msg and $message = $msg;
		parent::__construct($result,$errors, $message, $data, array(
			'evidences' => [self::PARAM_TYPE_ARRAY, self::PARAM_OPTIONAL, Evidence::class],
		));
	}
}
