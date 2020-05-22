<?php


namespace MercadoLibre\Native\ClaimExpectedResolutionList;



use MercadoLibre\Native\ClaimExpectedResolutionList\Model\ExpectedResolution;
use MercadoLibre\Native\NativeErrorMsg;
use MercadoLibre\Native\NativeResponse;

/**
 * @property ExpectedResolution[] expected_resolutions
 */
class ClaimExpectedResolutionListResponse extends NativeResponse{
	public function __construct($result,$errors, $message = 'success', $data = []) {
		$msg = NativeErrorMsg::getMsg($errors);
		$msg and $message = $msg;
		parent::__construct($result,$errors, $message, $data, array(
			'expected_resolutions' => [self::PARAM_TYPE_ARRAY, self::PARAM_OPTIONAL, ExpectedResolution::class],
		));
	}
}
