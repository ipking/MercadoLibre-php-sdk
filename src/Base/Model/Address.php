<?php

namespace MercadoLibre\Base\Model;

use MercadoLibre\Base\BaseParameter;

/**
 * @property string id
 * @property string name
 */
class Address extends BaseParameter
{
	public function __construct($data = [])
	{
		parent::__construct($data, array(
			'id'   => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'name' => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
		));
	}
}