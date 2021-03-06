<?php

namespace MercadoLibre\GlobalSelling\MarketplaceOrdersSearchGet\Model;

use MercadoLibre\Base\BaseParameter;

/**
 * @property string id
 * @property Order[] orders
 */
class OrderInfo extends BaseParameter
{
	public function __construct($data = [])
	{
		parent::__construct($data, array(
			'id'     => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'orders' => [self::PARAM_TYPE_ARRAY, self::PARAM_OPTIONAL, Order::class],
		));
	}
}