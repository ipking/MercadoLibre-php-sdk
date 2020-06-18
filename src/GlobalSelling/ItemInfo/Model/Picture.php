<?php

namespace MercadoLibre\GlobalSelling\ItemInfo\Model;


use MercadoLibre\GlobalSelling\GlobalSellingParameter;
/**
 * @property string id
 * @property string url
 * @property string secure_url
 * @property string size
 * @property string max_size
 * @property string quality
 */
class Picture extends GlobalSellingParameter
{
	public function __construct($data = [])
	{
		parent::__construct($data, array(
			'id'         => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'url'        => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'secure_url' => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'size'       => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'max_size'   => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'quality'    => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
		));
	}
}