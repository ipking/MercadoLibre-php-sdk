<?php

namespace MercadoLibre\GlobalSelling\ItemsPost\Model;

use MercadoLibre\Base\BaseParameter;

/**
 * @property string item_id
 * @property string parent_id
 * @property string logistic_type
 * @property string site_id
 * @property Error[] errors
 */
class Item extends BaseParameter
{
	public function __construct($data = [])
	{
		parent::__construct($data, array(
			'item_id'       => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'parent_id'     => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'logistic_type' => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'site_id'       => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'errors'        => [self::PARAM_TYPE_ARRAY, self::PARAM_OPTIONAL, Error::class],
		));
	}
}
