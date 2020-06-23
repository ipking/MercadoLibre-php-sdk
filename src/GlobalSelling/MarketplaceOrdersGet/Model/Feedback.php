<?php

namespace MercadoLibre\GlobalSelling\MarketplaceOrdersGet\Model;


use MercadoLibre\Base\BaseParameter;

/**
 * @property string sale
 * @property string purchase
 */
class Feedback extends BaseParameter
{
	public function __construct($data = [])
	{
		parent::__construct($data, array(
			'sale'   => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'purchase' => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
		));
	}
}