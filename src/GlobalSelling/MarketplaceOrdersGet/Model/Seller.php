<?php

namespace MercadoLibre\GlobalSelling\MarketplaceOrdersGet\Model;


use MercadoLibre\Base\BaseParameter;

/**
 * @property string id
 * @property string nickname
 * @property string last_name
 * @property string first_name
 */
class Seller extends BaseParameter
{
	public function __construct($data = [])
	{
		parent::__construct($data, array(
			'id'         => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'nickname'   => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'last_name'  => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'first_name' => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
		));
	}
}