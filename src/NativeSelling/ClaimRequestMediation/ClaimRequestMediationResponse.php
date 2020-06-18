<?php


namespace MercadoLibre\NativeSelling\ClaimRequestMediation;


use MercadoLibre\NativeSelling\ClaimList\Model\ClaimInfo;
use MercadoLibre\NativeSelling\NativeSellingErrorMsg;
use MercadoLibre\NativeSelling\NativeSellingResponse;

/**
 * @property ClaimInfo claim
 */
class ClaimRequestMediationResponse extends NativeSellingResponse{
	public function __construct($result,$errors, $message = 'success', $data = []) {
		$msg = NativeSellingErrorMsg::getMsg($errors);
		$msg and $message = $msg;
		parent::__construct($result,$errors, $message, $data, array(
			'claim' => [self::PARAM_TYPE_OBJECT, self::PARAM_OPTIONAL, ClaimInfo::class],
		));
	}
}
