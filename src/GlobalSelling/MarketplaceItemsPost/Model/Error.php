<?php

namespace MercadoLibre\GlobalSelling\MarketplaceItemsPost\Model;

use MercadoLibre\Base\BaseParameter;

/**
 * @property string message
 * @property string error
 * @property string status
 */
class Error extends BaseParameter
{
	public function __construct($data = [])
	{
		parent::__construct($data, array(
			'message' => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'error'   => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'status'  => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
		));
	}
}
