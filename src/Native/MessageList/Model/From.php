<?php

namespace MercadoLibre\Native\MessageList\Model;


use MercadoLibre\Native\NativeParameter;
/**
 * @property string user_id
 * @property string email
 * @property string name
 */
class From extends NativeParameter
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
