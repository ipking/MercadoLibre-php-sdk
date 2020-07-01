<?php

namespace MercadoLibre\GlobalSelling\MarketplaceClaimsSearchGet\Model;


use MercadoLibre\Base\BaseParameter;

/**
 * @property string action
 * @property string due_date
 * @property string mandatory
 */
class AvailableAction extends BaseParameter
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
