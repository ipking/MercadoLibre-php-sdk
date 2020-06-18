<?php


namespace MercadoLibre\GlobalSelling\ClaimAcceptResolution;


use MercadoLibre\GlobalSelling\ClaimExpectedResolutionList\Model\ExpectedResolution;

use MercadoLibre\GlobalSelling\GlobalSellingErrorMsg;
use MercadoLibre\GlobalSelling\GlobalSellingResponse;

/**
 * @property ExpectedResolution[] expected_resolutions
 */
class ClaimAcceptResolutionResponse extends GlobalSellingResponse{
	public function __construct($result,$errors, $message = 'success', $data = []) {
		$msg = GlobalSellingErrorMsg::getMsg($errors);
		$msg and $message = $msg;
		parent::__construct($result,$errors, $message, $data, array(
			'expected_resolutions' => [self::PARAM_TYPE_ARRAY, self::PARAM_OPTIONAL, ExpectedResolution::class],
		));
	}
}
