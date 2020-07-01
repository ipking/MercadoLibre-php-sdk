<?php


namespace MercadoLibre\GlobalSelling\MarketplaceClaimsAcceptResolutionsPut;

use MercadoLibre\Base\BaseParameter;

/**
 * @property String claim_id
 */
class MarketplaceClaimsAcceptResolutionsPutParameter extends BaseParameter
{
	public function __construct($data = [])
	{
		parent::__construct($data, array(
			'claim_id'       => [self::PARAM_TYPE_STRING, self::PARAM_REQUIRED],
		));
	}
}













