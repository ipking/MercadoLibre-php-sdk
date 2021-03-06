<?php

namespace MercadoLibre\NativeSelling\ItemsVariationsGet\Model;


use MercadoLibre\Base\BaseParameter;

/**
 * @property string number
 * @property string unit
 */
class ValueStruct extends BaseParameter
{
	public function __construct($data = [])
	{
		parent::__construct($data, array(
			'number' => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'unit'   => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
		));
	}
}