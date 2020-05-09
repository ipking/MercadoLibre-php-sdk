<?php

namespace MercadoLibre\Native\Variations\Model;


use MercadoLibre\Native\NativeParameter;
/**
 * @property string id
 * @property string name
 * @property string value_id
 * @property string value_name
 * @property array value_struct
 */
class Attribute extends NativeParameter
{
	public function __construct($data = [])
	{
		parent::__construct($data, array(
			'id'           => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'name'         => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'value_id'     => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'value_name'   => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'value_struct' => [self::PARAM_TYPE_OBJECT, self::PARAM_ISSET, ValueStruct::class],
		));
	}
}