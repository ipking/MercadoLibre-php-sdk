<?php


namespace MercadoLibre\GlobalSelling\ClaimEvidence;



use MercadoLibre\GlobalSelling\ClaimEvidenceList\Model\Evidence;
use MercadoLibre\GlobalSelling\GlobalSellingErrorMsg;
use MercadoLibre\GlobalSelling\GlobalSellingResponse;

/**
 * @property Evidence[] evidences
 */
class ClaimEvidenceResponse extends GlobalSellingResponse{
	public function __construct($result,$errors, $message = 'success', $data = []) {
		$msg = GlobalSellingErrorMsg::getMsg($errors);
		$msg and $message = $msg;
		parent::__construct($result,$errors, $message, $data, array(
			'evidences' => [self::PARAM_TYPE_ARRAY, self::PARAM_OPTIONAL, Evidence::class],
		));
	}
}
