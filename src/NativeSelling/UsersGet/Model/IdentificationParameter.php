<?php

namespace MercadoLibre\NativeSelling\UsersGet\Model;


use MercadoLibre\Base\BaseParameter;

/**
 * @property string type
 * @property string number
 */
class IdentificationParameter extends BaseParameter
{
	public function __construct($data = [])
	{
		parent::__construct($data, array(
			'type'   => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'number' => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
		));
	}
}