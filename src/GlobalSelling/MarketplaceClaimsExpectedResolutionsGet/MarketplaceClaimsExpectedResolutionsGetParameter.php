<?php


namespace MercadoLibre\GlobalSelling\MarketplaceClaimsExpectedResolutionsGet;

use MercadoLibre\Base\BaseParameter;

/**
 * @property String claim_id
 */
class MarketplaceClaimsExpectedResolutionsGetParameter extends BaseParameter
{
	public function __construct($data = [])
	{
		parent::__construct($data, array(
			'claim_id'       => [self::PARAM_TYPE_STRING, self::PARAM_REQUIRED],
		));
	}
}













