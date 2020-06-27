<?php

namespace MercadoLibre\NativeSelling\ItemsPost\Model;


use MercadoLibre\Base\BaseParameter;

/**
 * @property string description
 * @property string cost
 */
class Cost extends BaseParameter
{
	public function __construct($data = [])
	{
		parent::__construct($data, array(
			'description' => [self::PARAM_TYPE_STRING, self::PARAM_REQUIRED],
			'cost'        => [self::PARAM_TYPE_STRING, self::PARAM_REQUIRED],
		));
	}
}