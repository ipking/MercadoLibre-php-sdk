<?php

namespace MercadoLibre\Native\ItemInfo\Model;


use MercadoLibre\Native\NativeParameter;
/**
 * @property string number
 * @property string unit
 */
class ValueStruct extends NativeParameter
{
	public function __construct($data = [])
	{
		parent::__construct($data, array(
			'number' => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'unit'   => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
		));
	}
}