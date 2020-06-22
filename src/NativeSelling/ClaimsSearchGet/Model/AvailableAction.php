<?php

namespace MercadoLibre\NativeSelling\ClaimsSearchGet\Model;


use MercadoLibre\NativeSelling\NativeSellingParameter;

/**
 * @property string action
 * @property string due_date
 * @property string mandatory
 */
class AvailableAction extends NativeSellingParameter
{
	public function __construct($data = [])
	{
		
		parent::__construct($data, array(
			'action'    => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'due_date'  => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'mandatory' => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
		));
	}
}
