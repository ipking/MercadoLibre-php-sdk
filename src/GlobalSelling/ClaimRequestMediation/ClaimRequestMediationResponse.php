<?php


namespace MercadoLibre\GlobalSelling\ClaimRequestMediation;


use MercadoLibre\GlobalSelling\ClaimList\Model\ClaimInfo;
use MercadoLibre\GlobalSelling\GlobalSellingErrorMsg;
use MercadoLibre\GlobalSelling\GlobalSellingResponse;

/**
 * @property ClaimInfo claim
 */
class ClaimRequestMediationResponse extends GlobalSellingResponse{
	public function __construct($result,$errors, $message = 'success', $data = []) {
		$msg = GlobalSellingErrorMsg::getMsg($errors);
		$msg and $message = $msg;
		parent::__construct($result,$errors, $message, $data, array(
			'claim' => [self::PARAM_TYPE_OBJECT, self::PARAM_OPTIONAL, ClaimInfo::class],
		));
	}
}
