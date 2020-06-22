<?php

namespace MercadoLibre\NativeSelling\MessagesPost\Model;


use MercadoLibre\NativeSelling\NativeSellingParameter;

/**
 * @property string user_id
 * @property string email
 */
class From extends NativeSellingParameter
{
	public function __construct($data = [])
	{
		parent::__construct($data, array(
			'user_id' => [self::PARAM_TYPE_STRING, self::PARAM_REQUIRED],
			'email'   => [self::PARAM_TYPE_STRING, self::PARAM_REQUIRED],
		));
	}
}
