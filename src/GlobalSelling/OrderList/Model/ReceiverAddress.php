<?php

namespace MercadoLibre\GlobalSelling\OrderList\Model;


use MercadoLibre\GlobalSelling\GlobalSellingParameter;
/**
 * @property string id
 * @property string zip_code
 * @property string latitude
 * @property string longitude
 * @property string street_number
 * @property string street_name
 * @property string state
 * @property string comment
 * @property string address_line
 * @property string country
 * @property string city
 */
class ReceiverAddress extends GlobalSellingParameter
{
	public function __construct($data = [])
	{
		$data['state'] = $data['state']['name'];
		$data['city'] = $data['city']['name'];
		$data['country'] = $data['country']['id']?:$data['country']['name'];
		parent::__construct($data, array(
			'id'            => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'zip_code'      => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'latitude'      => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'longitude'     => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'street_number' => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'street_name'   => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'state'         => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'comment'       => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'address_line'  => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'country'       => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'city'          => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
		));
	}
}
