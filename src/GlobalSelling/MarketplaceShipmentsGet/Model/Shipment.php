<?php

namespace MercadoLibre\GlobalSelling\MarketplaceShipmentsGet\Model;


use MercadoLibre\Base\BaseParameter;

/**
 * @property string id
 * @property string order_id
 * @property string site_id
 * @property string status
 * @property string substatus
 * @property string date_created
 * @property string last_updated
 * @property string tracking_number
 * @property string tracking_method
 * @property string sender_id
 * @property string receiver_id
 * @property ReceiverAddress receiver_address
 * @property ShippingItem[] shipping_items
 * @property string date_first_printed
 * @property string logistic_type
 * @property string mode
 */
class Shipment extends BaseParameter
{
	public function __construct($data = [])
	{
		parent::__construct($data, array(
			'id'                 => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'order_id'           => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'site_id'            => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'status'             => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'substatus'          => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'date_created'       => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'last_updated'       => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'tracking_number'    => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'tracking_method'    => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'sender_id'          => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'receiver_id'        => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'receiver_address'   => [self::PARAM_TYPE_OBJECT, self::PARAM_OPTIONAL,ReceiverAddress::class],
			'shipping_items'     => [self::PARAM_TYPE_ARRAY, self::PARAM_OPTIONAL,ShippingItem::class],
			'date_first_printed' => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'logistic_type'      => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'mode'               => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
		));
	}
}