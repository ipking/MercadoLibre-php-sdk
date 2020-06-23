<?php

namespace MercadoLibre\GlobalSelling\MarketplaceItemsPost\Model;

use MercadoLibre\Base\BaseParameter;

/**
 * @property string site_id
 * @property string logistic_type
 * @property string price
 * @property string status
 * @property string title
 * @property Description description
 */
class Config extends BaseParameter
{
	public function __construct($data = [])
	{
		parent::__construct($data, array(
			'site_id'       => [self::PARAM_TYPE_STRING, self::PARAM_REQUIRED],
			'logistic_type' => [self::PARAM_TYPE_STRING, self::PARAM_REQUIRED],
			'price'         => [self::PARAM_TYPE_STRING, self::PARAM_ISSET],
			'status'        => [self::PARAM_TYPE_STRING, self::PARAM_ISSET],
			'title'         => [self::PARAM_TYPE_STRING, self::PARAM_ISSET],
			'description'   => [self::PARAM_TYPE_OBJECT, self::PARAM_ISSET, Description::class],
		));
	}
}
