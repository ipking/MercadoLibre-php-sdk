<?php

namespace MercadoLibre\NativeSelling\MessagesPacksGet\Model;


use MercadoLibre\Base\BaseParameter;

/**
 * @property string user_id
 * @property string email
 * @property string name
 */
class To extends BaseParameter
{
	public function __construct($data = [])
	{
		
		parent::__construct($data, array(
			'user_id' => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'email'   => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'name'    => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
		));
	}
}
