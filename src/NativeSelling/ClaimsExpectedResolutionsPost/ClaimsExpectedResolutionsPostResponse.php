<?php


namespace MercadoLibre\NativeSelling\ClaimsExpectedResolutionsPost;


use MercadoLibre\NativeSelling\ClaimsExpectedResolutionsGet\Model\ExpectedResolution;
use MercadoLibre\NativeSelling\NativeSellingErrorMsg;
use MercadoLibre\NativeSelling\NativeSellingResponse;

/**
 * @property ExpectedResolution[] expected_resolutions
 */
class ClaimsExpectedResolutionsPostResponse extends NativeSellingResponse{
	public function __construct($result,$errors, $message = 'success', $data = []) {
		$msg = NativeSellingErrorMsg::getMsg($errors);
		$msg and $message = $msg;
		parent::__construct($result,$errors, $message, $data, array(
			'expected_resolutions' => [self::PARAM_TYPE_ARRAY, self::PARAM_OPTIONAL, ExpectedResolution::class],
		));
	}
}