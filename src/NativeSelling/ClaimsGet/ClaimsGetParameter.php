<?php


namespace MercadoLibre\NativeSelling\ClaimsGet;

use MercadoLibre\NativeSelling\NativeSellingParameter;

/**
 * @property String claim_id
 */
class ClaimsGetParameter extends NativeSellingParameter
{
	public function __construct($data = [])
	{
		parent::__construct($data, array(
			'claim_id'       => [self::PARAM_TYPE_STRING, self::PARAM_REQUIRED],
		));
	}
}













