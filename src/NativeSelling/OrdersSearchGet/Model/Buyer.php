<?php

namespace MercadoLibre\NativeSelling\OrdersSearchGet\Model;


use MercadoLibre\Base\BaseParameter;

/**
 * @property string id
 * @property string nickname
 * @property string first_name
 * @property string last_name
 * @property string email
 * @property Phone phone
 * @property Phone alternative_phone
 */
class Buyer extends BaseParameter
{
	public function __construct($data = [])
	{
		parent::__construct($data, array(
			'id'                => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'nickname'          => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'first_name'        => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'last_name'         => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'email'             => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'phone'             => [self::PARAM_TYPE_OBJECT, self::PARAM_OPTIONAL, Phone::class],
			'alternative_phone' => [self::PARAM_TYPE_OBJECT, self::PARAM_OPTIONAL, Phone::class],
		));
	}
}