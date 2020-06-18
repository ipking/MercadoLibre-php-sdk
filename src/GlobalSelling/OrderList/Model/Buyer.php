<?php

namespace MercadoLibre\GlobalSelling\OrderList\Model;


use MercadoLibre\GlobalSelling\GlobalSellingParameter;
/**
 * @property string id
 * @property string nickname
 * @property string first_name
 * @property string last_name
 * @property string email
 * @property Phone phone
 * @property Phone alterGlobalSelling_phone
 */
class Buyer extends GlobalSellingParameter
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
			'alterGlobalSelling_phone' => [self::PARAM_TYPE_OBJECT, self::PARAM_OPTIONAL, Phone::class],
		));
	}
}