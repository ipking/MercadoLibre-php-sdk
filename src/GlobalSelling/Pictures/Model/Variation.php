<?php

namespace MercadoLibre\GlobalSelling\Pictures\Model;


use MercadoLibre\GlobalSelling\GlobalSellingParameter;
/**
 * @property string size
 * @property string url
 * @property string secure_url
 */
class Variation extends GlobalSellingParameter
{
	public function __construct($data = [])
	{
		parent::__construct($data, array(
			'size'       => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'url'        => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'secure_url' => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
		));
	}
}