<?php

namespace MercadoLibre\Native\ItemCreate\Model;


use MercadoLibre\Native\NativeParameter;
/**
 * @property string id
 * @property string value_id
 * @property string value_name
 */
class AttributesParameter extends NativeParameter
{
	public function __construct($data = [])
	{
		parent::__construct($data, array(
			'id'         => [self::PARAM_TYPE_STRING, self::PARAM_REQUIRED],
			'value_id'   => [self::PARAM_TYPE_STRING, self::PARAM_ISSET],
			'value_name' => [self::PARAM_TYPE_STRING, self::PARAM_ISSET],
		));
	}
}