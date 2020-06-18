<?php

namespace MercadoLibre\NativeSelling\MessageList\Model;


use MercadoLibre\NativeSelling\NativeSellingParameter;
/**
 * @property string user_id
 * @property string email
 * @property string name
 */
class To extends NativeSellingParameter
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
