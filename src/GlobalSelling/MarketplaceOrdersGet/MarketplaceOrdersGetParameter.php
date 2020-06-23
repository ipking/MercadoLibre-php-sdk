<?php

namespace MercadoLibre\GlobalSelling\MarketplaceOrdersGet;

use MercadoLibre\Base\BaseParameter;

/**
 * @property String order_id
 */
class MarketplaceOrdersGetParameter extends BaseParameter
{
	public function __construct($data = [])
	{
		parent::__construct($data, array(
			'order_id'         => [self::PARAM_TYPE_STRING, self::PARAM_REQUIRED],
		));
	}
}