<?php

namespace MercadoLibre\NativeSelling\ItemCreate\Model;

use MercadoLibre\NativeSelling\NativeSellingParameter;

/**
 * @property string id
 * @property string value_id
 * @property string value_name
 */
class SaleTerm extends NativeSellingParameter
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