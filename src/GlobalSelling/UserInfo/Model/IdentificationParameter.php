<?php

namespace MercadoLibre\GlobalSelling\UserInfo\Model;


use MercadoLibre\GlobalSelling\GlobalSellingParameter;
/**
 * @property string type
 * @property string number
 */
class IdentificationParameter extends GlobalSellingParameter
{
	public function __construct($data = [])
	{
		parent::__construct($data, array(
			'type'   => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'number' => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
		));
	}
}