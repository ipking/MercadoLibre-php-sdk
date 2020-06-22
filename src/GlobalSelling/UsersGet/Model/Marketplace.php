<?php

namespace MercadoLibre\GlobalSelling\UsersGet\Model;

use MercadoLibre\GlobalSelling\GlobalSellingParameter;

/**
 * @property string user_id
 * @property string site_id
 * @property string logistic_type
 */
class Marketplace extends GlobalSellingParameter
{
	public function __construct($data = [])
	{
		parent::__construct($data, array(
			'user_id'       => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'site_id'       => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'logistic_type' => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
		));
	}
}
