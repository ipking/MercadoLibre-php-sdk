<?php

namespace MercadoLibre\GlobalSelling\ClaimList\Model;


use MercadoLibre\GlobalSelling\GlobalSellingParameter;
/**
 * @property string role
 * @property string type
 * @property string user_id
 * @property AvailableAction[] available_actions
 */
class Player extends GlobalSellingParameter
{
	public function __construct($data = [])
	{
		parent::__construct($data, array(
			'role'              => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'type'              => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'user_id'           => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'available_actions' => [self::PARAM_TYPE_ARRAY ,self::PARAM_OPTIONAL,AvailableAction::class],
		));
	}
}
