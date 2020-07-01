<?php


namespace MercadoLibre\GlobalSelling\MarketplaceClaimsPut;


use MercadoLibre\GlobalSelling\MarketplaceClaimsSearchGet\Model\ClaimInfo;
use MercadoLibre\Base\BaseErrorMsg;
use MercadoLibre\Base\BaseResponse;

/**
 * @property ClaimInfo claim
 */
class MarketplaceClaimsPutResponse extends BaseResponse{
	public function __construct($result,$errors, $message = 'success', $data = []) {
		$msg = BaseErrorMsg::getMsg($errors);
		$msg and $message = $msg;
		parent::__construct($result,$errors, $message, $data, array(
			'claim' => [self::PARAM_TYPE_OBJECT, self::PARAM_OPTIONAL, ClaimInfo::class],
		));
	}
}
