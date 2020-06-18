<?php


namespace MercadoLibre\NativeSelling\ClaimEvidenceList;



use MercadoLibre\NativeSelling\ClaimEvidenceList\Model\Evidence;
use MercadoLibre\NativeSelling\NativeSellingErrorMsg;
use MercadoLibre\NativeSelling\NativeSellingResponse;

/**
 * @property Evidence[] evidences
 */
class ClaimEvidenceListResponse extends NativeSellingResponse{
	public function __construct($result,$errors, $message = 'success', $data = []) {
		$msg = NativeSellingErrorMsg::getMsg($errors);
		$msg and $message = $msg;
		parent::__construct($result,$errors, $message, $data, array(
			'evidences' => [self::PARAM_TYPE_ARRAY, self::PARAM_OPTIONAL, Evidence::class],
		));
	}
}
