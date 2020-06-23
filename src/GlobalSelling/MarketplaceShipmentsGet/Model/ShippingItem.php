<?php

namespace MercadoLibre\GlobalSelling\MarketplaceShipmentsGet\Model;


use MercadoLibre\Base\BaseParameter;

/**
 * @property string id
 * @property string description
 * @property string quantity
 * @property string dimensions
 */
class ShippingItem extends BaseParameter
{
	public function __construct($data = [])
	{
		parent::__construct($data, array(
			'id'          => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'description' => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'quantity'    => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'dimensions'  => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
		));
	}
}