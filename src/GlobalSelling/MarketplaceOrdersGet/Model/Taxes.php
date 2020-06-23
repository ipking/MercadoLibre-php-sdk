<?php

namespace MercadoLibre\GlobalSelling\MarketplaceOrdersGet\Model;


use MercadoLibre\Base\BaseParameter;

/**
 * @property string amount
 * @property string currency_id
 */
class Taxes extends BaseParameter
{
	public function __construct($data = [])
	{
		parent::__construct($data, array(
			'amount'      => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'currency_id' => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
		));
	}
}