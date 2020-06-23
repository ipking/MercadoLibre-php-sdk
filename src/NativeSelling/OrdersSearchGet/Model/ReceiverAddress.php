<?php

namespace MercadoLibre\NativeSelling\OrdersSearchGet\Model;


use MercadoLibre\Base\BaseParameter;
use MercadoLibre\Base\Model\Address;

/**
 * @property string id
 * @property string zip_code
 * @property string latitude
 * @property string longitude
 * @property string street_number
 * @property string street_name
 * @property Address state
 * @property string comment
 * @property string address_line
 * @property Address country
 * @property Address city
 */
class ReceiverAddress extends BaseParameter
{
	public function __construct($data = [])
	{
		parent::__construct($data, array(
			'id'            => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'zip_code'      => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'latitude'      => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'longitude'     => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'street_number' => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'street_name'   => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'state'         => [self::PARAM_TYPE_OBJECT, self::PARAM_OPTIONAL,Address::class],
			'comment'       => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'address_line'  => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'country'       => [self::PARAM_TYPE_OBJECT, self::PARAM_OPTIONAL,Address::class],
			'city'          => [self::PARAM_TYPE_OBJECT, self::PARAM_OPTIONAL,Address::class],
		));
	}
}
