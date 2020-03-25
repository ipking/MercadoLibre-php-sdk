<?php

namespace MercadoLibre\Native\OrderList\Model;


use MercadoLibre\Native\NativeParameter;
/**
 * @property string currency_id
 * @property string sale_fee
 * @property string quantity
 * @property string unit_price
 * @property Item item
 */
class OrderItem extends NativeParameter
{
	public function __construct($data = [])
	{
		parent::__construct($data, array(
			'currency_id' => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'sale_fee'    => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'quantity'    => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'unit_price'  => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'item'        => [self::PARAM_TYPE_OBJECT, self::PARAM_OPTIONAL, Item::class],
		));
	}
}