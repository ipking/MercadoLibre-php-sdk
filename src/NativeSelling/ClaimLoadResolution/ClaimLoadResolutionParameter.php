<?php


namespace MercadoLibre\NativeSelling\ClaimLoadResolution;

use MercadoLibre\NativeSelling\NativeSellingParameter;

/**
 * @property String claim_id
 * @property String expected_resolution
 */
class ClaimLoadResolutionParameter extends NativeSellingParameter
{
	public function __construct($data = [])
	{
		parent::__construct($data, array(
			'claim_id'            => [self::PARAM_TYPE_STRING, self::PARAM_REQUIRED],
			'expected_resolution' => [self::PARAM_TYPE_STRING, self::PARAM_REQUIRED],
		));
	}
}













