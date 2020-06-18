<?php

namespace MercadoLibre\NativeSelling\UserInfo\Model;


use MercadoLibre\NativeSelling\NativeSellingParameter;
/**
 * @property string state
 * @property string city
 * @property string address
 * @property string zip_code
 */
class AddressParameter extends NativeSellingParameter
{
	public function __construct($data = [])
	{
		parent::__construct($data, array(
			'state'    => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'city'     => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'address'  => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'zip_code' => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
		));
	}
}