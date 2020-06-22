<?php

namespace MercadoLibre\NativeSelling\MessagesPost\Model;


use MercadoLibre\Base\BaseParameter;

/**
 * @property string user_id
 */
class To extends BaseParameter
{
	public function __construct($data = [])
	{
		
		parent::__construct($data, array(
			'user_id' => [self::PARAM_TYPE_STRING, self::PARAM_REQUIRED],
		));
	}
}
