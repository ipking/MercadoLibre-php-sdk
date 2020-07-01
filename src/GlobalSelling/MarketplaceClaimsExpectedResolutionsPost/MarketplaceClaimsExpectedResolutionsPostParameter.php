<?php


namespace MercadoLibre\GlobalSelling\MarketplaceClaimsExpectedResolutionsPost;

use MercadoLibre\Base\BaseParameter;

/**
 * @property String claim_id
 * @property String expected_resolution
 */
class MarketplaceClaimsExpectedResolutionsPostParameter extends BaseParameter
{
	public function __construct($data = [])
	{
		parent::__construct($data, array(
			'claim_id'            => [self::PARAM_TYPE_STRING, self::PARAM_REQUIRED],
			'expected_resolution' => [self::PARAM_TYPE_STRING, self::PARAM_REQUIRED],
		));
	}
}













