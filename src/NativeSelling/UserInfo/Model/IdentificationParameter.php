<?php

namespace MercadoLibre\NativeSelling\UserInfo\Model;


use MercadoLibre\NativeSelling\NativeSellingParameter;
/**
 * @property string type
 * @property string number
 */
class IdentificationParameter extends NativeSellingParameter
{
	public function __construct($data = [])
	{
		parent::__construct($data, array(
			'type'   => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'number' => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
		));
	}
}