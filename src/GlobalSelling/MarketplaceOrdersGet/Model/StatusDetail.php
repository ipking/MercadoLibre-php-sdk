<?php

namespace MercadoLibre\GlobalSelling\MarketplaceOrdersGet\Model;


use MercadoLibre\Base\BaseParameter;

/**
 * @property string code
 * @property string description
 */
class StatusDetail extends BaseParameter
{
	public function __construct($data = [])
	{
		parent::__construct($data, array(
			'code'        => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'description' => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
		));
	}
}