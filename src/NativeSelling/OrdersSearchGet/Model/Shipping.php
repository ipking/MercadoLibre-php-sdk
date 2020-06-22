<?php

namespace MercadoLibre\NativeSelling\OrdersSearchGet\Model;


use MercadoLibre\NativeSelling\NativeSellingParameter;

/**
 * @property string substatus
 * @property string status
 * @property string id
 * @property string service_id
 * @property string currency_id
 * @property string shipping_mode
 * @property string shipment_type
 * @property string sender_id
 * @property string picking_type
 * @property string date_created
 * @property string cost
 * @property string date_first_printed
 * @property ReceiverAddress receiver_address
 */
class Shipping extends NativeSellingParameter
{
	public function __construct($data = [])
	{
		parent::__construct($data, array(
			'substatus'          => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'status'             => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'id'                 => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'service_id'         => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'currency_id'        => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'shipping_mode'      => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'shipment_type'      => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'sender_id'          => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'picking_type'       => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'date_created'       => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'cost'               => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'date_first_printed' => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'receiver_address'   => [self::PARAM_TYPE_OBJECT, self::PARAM_OPTIONAL, ReceiverAddress::class],
		));
	}
}
