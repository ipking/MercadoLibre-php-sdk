<?php

namespace MercadoLibre\GlobalSelling\MarketplaceOrdersGet\Model;


use MercadoLibre\Base\BaseParameter;

/**
 * @property string return
 * @property string change
 */
class OrderRequest extends BaseParameter
{
	public function __construct($data = [])
	{
		parent::__construct($data, array(
			'return' => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'change' => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
		));
	}
}