<?php

namespace MercadoLibre\GlobalSelling\Variations\Model;


use MercadoLibre\GlobalSelling\GlobalSellingParameter;
/**
 * @property string number
 * @property string unit
 */
class ValueStruct extends GlobalSellingParameter
{
	public function __construct($data = [])
	{
		parent::__construct($data, array(
			'number' => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'unit'   => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
		));
	}
}