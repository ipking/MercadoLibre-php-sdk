<?php

namespace MercadoLibre\GlobalSelling\MarketplaceOrdersGet\Model;


use MercadoLibre\Base\BaseParameter;

/**
 * @property string quantity
 * @property string unit_price
 * @property string full_unit_price
 * @property string currency_id
 * @property string manufacturing_days
 * @property string sale_fee
 * @property string base_exchange_rate
 * @property Item item
 */
class OrderItem extends BaseParameter
{
	public function __construct($data = [])
	{
		parent::__construct($data, array(
			'quantity'           => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'unit_price'         => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'full_unit_price'    => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'currency_id'        => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'manufacturing_days' => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'sale_fee'           => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'base_exchange_rate' => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'item'               => [self::PARAM_TYPE_OBJECT, self::PARAM_OPTIONAL, Item::class],
		));
	}
}