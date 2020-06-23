<?php

namespace MercadoLibre\GlobalSelling\MarketplaceOrdersInvoiceGet;

use MercadoLibre\Base\BaseParameter;

/**
 * @property String order_id
 */
class MarketplaceOrdersInvoiceGetParameter extends BaseParameter
{
	public function __construct($data = [])
	{
		parent::__construct($data, array(
			'order_id'            => [self::PARAM_TYPE_STRING, self::PARAM_REQUIRED],
		));
	}
}