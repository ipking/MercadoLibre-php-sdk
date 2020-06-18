<?php

namespace MercadoLibre\NativeSelling\MessageCreate\Model;


use MercadoLibre\NativeSelling\NativeSellingParameter;
/**
 * @property string user_id
 */
class To extends NativeSellingParameter
{
	public function __construct($data = [])
	{
		
		parent::__construct($data, array(
			'user_id' => [self::PARAM_TYPE_STRING, self::PARAM_REQUIRED],
		));
	}
}
