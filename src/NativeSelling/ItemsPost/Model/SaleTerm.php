<?php

namespace MercadoLibre\NativeSelling\ItemsPost\Model;

use MercadoLibre\Base\BaseParameter;

/**
 * @property string id
 * @property string value_id
 * @property string value_name
 */
class SaleTerm extends BaseParameter
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