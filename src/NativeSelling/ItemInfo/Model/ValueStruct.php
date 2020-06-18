<?php

namespace MercadoLibre\NativeSelling\ItemInfo\Model;


use MercadoLibre\NativeSelling\NativeSellingParameter;
/**
 * @property string number
 * @property string unit
 */
class ValueStruct extends NativeSellingParameter
{
	public function __construct($data = [])
	{
		parent::__construct($data, array(
			'number' => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'unit'   => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
		));
	}
}