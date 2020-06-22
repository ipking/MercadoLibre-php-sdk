<?php


namespace MercadoLibre\NativeSelling\ClaimsGet;

use MercadoLibre\Base\BaseParameter;

/**
 * @property String claim_id
 */
class ClaimsGetParameter extends BaseParameter
{
	public function __construct($data = [])
	{
		parent::__construct($data, array(
			'claim_id'       => [self::PARAM_TYPE_STRING, self::PARAM_REQUIRED],
		));
	}
}













