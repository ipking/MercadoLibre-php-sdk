<?php

namespace MercadoLibre\Native\OrderList\Model;


use MercadoLibre\Native\NativeParameter;
/**
 * @property string area_code
 * @property string number
 * @property string extension
 * @property string verified
 */
class Phone extends NativeParameter
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