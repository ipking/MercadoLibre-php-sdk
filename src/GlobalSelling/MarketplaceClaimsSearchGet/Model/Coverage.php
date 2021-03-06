<?php

namespace MercadoLibre\GlobalSelling\MarketplaceClaimsSearchGet\Model;


use MercadoLibre\Base\BaseParameter;

/**
 * @property string type
 * @property string benefited
 * @property string amount
 * @property string resource
 * @property string resource_id
 * @property string date_created
 * @property Cost[] costs
 */
class Coverage extends BaseParameter
{
	public function __construct($data = [])
	{
		parent::__construct($data, array(
			'type'         => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'benefited'    => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'amount'       => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'resource'     => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'resource_id'  => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'date_created' => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'costs'        => [self::PARAM_TYPE_ARRAY, self::PARAM_OPTIONAL, Cost::class],
		));
	}
}
