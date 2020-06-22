<?php

namespace MercadoLibre\NativeSelling\OrdersSearchGet\Model;


use MercadoLibre\Base\BaseParameter;

/**
 * @property string id
 * @property string status
 * @property string date_created
 * @property string date_closed
 * @property string expiration_date
 * @property string date_last_updated
 * @property string comments
 * @property string currency_id
 * @property string total_amount
 * @property OrderItem[] order_items
 * @property Shipping shipping
 * @property Buyer buyer
 * @property array tags
 */
class OrderInfo extends BaseParameter
{
	public function __construct($data = [])
	{
		parent::__construct($data, array(
			'id'                => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'status'            => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'date_created'      => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'date_closed'       => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'expiration_date'   => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'date_last_updated' => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'comments'          => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'currency_id'       => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'total_amount'      => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'order_items'       => [self::PARAM_TYPE_ARRAY, self::PARAM_OPTIONAL, OrderItem::class],
			'shipping'          => [self::PARAM_TYPE_OBJECT, self::PARAM_OPTIONAL, Shipping::class],
			'buyer'             => [self::PARAM_TYPE_OBJECT, self::PARAM_OPTIONAL, Buyer::class],
			'tags'              => [self::PARAM_TYPE_ARRAY, self::PARAM_OPTIONAL, self::PARAM_TYPE_STRING],
		));
	}
}