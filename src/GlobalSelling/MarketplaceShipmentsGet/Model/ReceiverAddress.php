<?php

namespace MercadoLibre\GlobalSelling\MarketplaceShipmentsGet\Model;


use MercadoLibre\Base\BaseParameter;
use MercadoLibre\Base\Model\Address;

/**
 * @property string id
 * @property string address_line
 * @property string street_name
 * @property string street_number
 * @property string comment
 * @property string zip_code
 * @property Address city
 * @property Address state
 * @property Address country
 * @property Address neighborhood
 * @property Address municipality
 * @property string agency
 * @property array types
 * @property string latitude
 * @property string longitude
 * @property string geolocation_type
 * @property string geolocation_last_updated
 * @property string geolocation_source
 * @property string receiver_name
 * @property string receiver_phone
 */
class ReceiverAddress extends BaseParameter
{
	public function __construct($data = [])
	{
		parent::__construct($data, array(
			'id'                       => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'address_line'             => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'street_name'              => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'street_number'            => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'comment'                  => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'zip_code'                 => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'city'                     => [self::PARAM_TYPE_OBJECT, self::PARAM_OPTIONAL,Address::class],
			'state'                    => [self::PARAM_TYPE_OBJECT, self::PARAM_OPTIONAL,Address::class],
			'country'                  => [self::PARAM_TYPE_OBJECT, self::PARAM_OPTIONAL,Address::class],
			'neighborhood'             => [self::PARAM_TYPE_OBJECT, self::PARAM_OPTIONAL,Address::class],
			'municipality'             => [self::PARAM_TYPE_OBJECT, self::PARAM_OPTIONAL,Address::class],
			'agency'                   => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'types'                    => [self::PARAM_TYPE_ARRAY, self::PARAM_OPTIONAL,self::PARAM_TYPE_STRING],
			'latitude'                 => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'longitude'                => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'geolocation_type'         => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'geolocation_last_updated' => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'geolocation_source'       => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'receiver_name'            => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'receiver_phone'           => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
		));
	}
}