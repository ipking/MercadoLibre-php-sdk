<?php

namespace MercadoLibre\GlobalSelling\MarketplaceClaimsSearchGet\Model;


use MercadoLibre\Base\BaseParameter;

/**
 * @property string role
 * @property string amount
 * @property string date_created
 */
class Cost extends BaseParameter
{
	public function __construct($data = [])
	{
		parent::__construct($data, array(
			'role'         => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'amount'       => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'date_created' => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
		));
	}
}
