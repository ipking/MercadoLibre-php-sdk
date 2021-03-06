<?php


namespace MercadoLibre\NativeSelling\ClaimsExpectedResolutionsGet;



use MercadoLibre\NativeSelling\ClaimsExpectedResolutionsGet\Model\ExpectedResolution;
use MercadoLibre\Base\BaseErrorMsg;
use MercadoLibre\Base\BaseResponse;

/**
 * @property ExpectedResolution[] expected_resolutions
 */
class ClaimsExpectedResolutionsGetResponse extends BaseResponse{
	public function __construct($result,$errors, $message = 'success', $data = []) {
		$msg = BaseErrorMsg::getMsg($errors);
		$msg and $message = $msg;
		parent::__construct($result,$errors, $message, $data, array(
			'expected_resolutions' => [self::PARAM_TYPE_ARRAY, self::PARAM_OPTIONAL, ExpectedResolution::class],
		));
	}
}
