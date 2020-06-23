<?php

namespace MercadoLibre\GlobalSelling\MarketplaceShipmentsTrackingPost;

use MercadoLibre\Base\BaseParameter;

/**
 * @property String shipment_id
 * @property String tracking_id
 * @property String tracking_url
 * @property String carrier
 */
class MarketplaceShipmentsTrackingPostParameter extends BaseParameter
{
	public function __construct($data = [])
	{
		parent::__construct($data, array(
			'shipment_id'  => [self::PARAM_TYPE_STRING, self::PARAM_REQUIRED],
			'tracking_id'  => [self::PARAM_TYPE_STRING, self::PARAM_ISSET],
			'tracking_url' => [self::PARAM_TYPE_STRING, self::PARAM_ISSET],
			'carrier'      => [self::PARAM_TYPE_STRING, self::PARAM_ISSET],
		));
	}
}