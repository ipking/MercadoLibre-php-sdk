<?php

namespace MercadoLibre\GlobalSelling\MarketplaceOrdersGet\Model;


use MercadoLibre\Base\BaseParameter;

/**
 * @property string doc_type
 * @property string doc_number
 */
class BillingInfo extends BaseParameter
{
	public function __construct($data = [])
	{
		parent::__construct($data, array(
			'doc_type'   => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'doc_number' => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
		));
	}
}