<?php

namespace MercadoLibre\NativeSelling\UserInfo\Model;


use MercadoLibre\NativeSelling\NativeSellingParameter;
/**
 * @property string area_code
 * @property string number
 * @property string extension
 * @property string verified
 */
class PhoneParameter extends NativeSellingParameter
{
	public function __construct($data = [])
	{
		parent::__construct($data, array(
			'area_code' => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'number'    => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'extension' => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'verified'  => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
		));
	}
}