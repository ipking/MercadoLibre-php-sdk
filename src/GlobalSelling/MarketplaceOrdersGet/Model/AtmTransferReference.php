<?php

namespace MercadoLibre\GlobalSelling\MarketplaceOrdersGet\Model;

use MercadoLibre\Base\BaseParameter;

/**
 * @property string company_id
 * @property string transaction_id
 */
class AtmTransferReference extends BaseParameter
{
	public function __construct($data = [])
	{
		parent::__construct($data, array(
			'company_id'   => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'transaction_id' => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
		));
	}
}