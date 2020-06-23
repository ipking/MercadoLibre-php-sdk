<?php

namespace MercadoLibre\GlobalSelling\MarketplaceOrdersGet\Model;

use MercadoLibre\Base\BaseParameter;

/**
 * @property string id
 */
class Shipping extends BaseParameter
{
	public function __construct($data = [])
	{
		parent::__construct($data, array(
			'id'                 => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
		));
	}
}
