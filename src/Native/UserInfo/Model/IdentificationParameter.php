<?php

namespace MercadoLibre\Native\UserInfo\Model;


use MercadoLibre\Native\NativeParameter;
/**
 * @property string type
 * @property string number
 */
class IdentificationParameter extends NativeParameter
{
	public function __construct($data = [])
	{
		parent::__construct($data, array(
			'type'   => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'number' => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
		));
	}
}