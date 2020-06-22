<?php

namespace MercadoLibre\GlobalSelling\ItemsPost\Model;

use MercadoLibre\GlobalSelling\GlobalSellingParameter;

/**
 * @property string price
 * @property string logistic_type
 * @property string site_id
 */
class Config extends GlobalSellingParameter
{
	public function __construct($data = [])
	{
		parent::__construct($data, array(
			'price'         => [self::PARAM_TYPE_STRING, self::PARAM_ISSET],
			'logistic_type' => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'site_id'       => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
		));
	}
}
