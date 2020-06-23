<?php

namespace MercadoLibre\GlobalSelling\MarketplaceShipmentsLabelsGet;

use MercadoLibre\Base\BaseParameter;

/**
 * @property String shipment_id
 */
class MarketplaceShipmentsLabelsGetParameter extends BaseParameter
{
	public function __construct($data = [])
	{
		parent::__construct($data, array(
			'shipment_id'     => [self::PARAM_TYPE_STRING, self::PARAM_REQUIRED],
		));
	}
}