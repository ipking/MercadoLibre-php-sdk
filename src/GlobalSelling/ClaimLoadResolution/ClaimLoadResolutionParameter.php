<?php


namespace MercadoLibre\GlobalSelling\ClaimLoadResolution;

use MercadoLibre\GlobalSelling\GlobalSellingParameter;

/**
 * @property String claim_id
 * @property String expected_resolution
 */
class ClaimLoadResolutionParameter extends GlobalSellingParameter
{
	public function __construct($data = [])
	{
		parent::__construct($data, array(
			'claim_id'            => [self::PARAM_TYPE_STRING, self::PARAM_REQUIRED],
			'expected_resolution' => [self::PARAM_TYPE_STRING, self::PARAM_REQUIRED],
		));
	}
}













