<?php

namespace MercadoLibre\NativeSelling\ItemsPost\Model;


use MercadoLibre\Base\BaseParameter;

/**
 * @property string mode
 * @property string local_pick_up
 * @property string free_shipping
 * @property array methods
 * @property Cost[] costs
 */
class Shipping extends BaseParameter
{
	public function __construct($data = [])
	{
		parent::__construct($data, array(
			'mode'          => [self::PARAM_TYPE_STRING, self::PARAM_REQUIRED],
			'local_pick_up' => [self::PARAM_TYPE_BOOL, self::PARAM_REQUIRED],
			'free_shipping' => [self::PARAM_TYPE_BOOL, self::PARAM_REQUIRED],
			'methods'       => [self::PARAM_TYPE_ARRAY, self::PARAM_OPTIONAL, self::PARAM_TYPE_STRING],
			'costs'         => [self::PARAM_TYPE_ARRAY, self::PARAM_OPTIONAL, Cost::class],
		));
	}
}