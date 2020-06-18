<?php

namespace MercadoLibre\GlobalSelling\MessageCreate\Model;


use MercadoLibre\GlobalSelling\GlobalSellingParameter;
/**
 * @property string user_id
 */
class To extends GlobalSellingParameter
{
	public function __construct($data = [])
	{
		
		parent::__construct($data, array(
			'user_id' => [self::PARAM_TYPE_STRING, self::PARAM_REQUIRED],
		));
	}
}
