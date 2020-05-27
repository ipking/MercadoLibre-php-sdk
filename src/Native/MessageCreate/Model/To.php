<?php

namespace MercadoLibre\Native\MessageCreate\Model;


use MercadoLibre\Native\NativeParameter;
/**
 * @property string user_id
 */
class To extends NativeParameter
{
	public function __construct($data = [])
	{
		
		parent::__construct($data, array(
			'user_id' => [self::PARAM_TYPE_STRING, self::PARAM_REQUIRED],
		));
	}
}
