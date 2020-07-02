<?php

namespace MercadoLibre\GlobalSelling\MarketplaceOrdersSearchGet;

use MercadoLibre\Base\BaseParameter;

/**
 * @property String offset
 * @property String limit
 * @property String buyer_id
 * @property String seller_id
 * @property String site_id
 * @property String logisitic_type
 * @property String order_status
 * @property String date_created_from
 * @property String date_created_to
 * @property String last_updated_from
 * @property String last_updated_to
 */
class MarketplaceOrdersSearchGetParameter extends BaseParameter
{
	public function __construct($data = [])
	{
		parent::__construct($data, array(
			'offset'            => [self::PARAM_TYPE_STRING, self::PARAM_ISSET],
			'limit'             => [self::PARAM_TYPE_STRING, self::PARAM_ISSET],
			'buyer_id'          => [self::PARAM_TYPE_STRING, self::PARAM_ISSET],
			'seller_id'         => [self::PARAM_TYPE_STRING, self::PARAM_ISSET],
			'site_id'           => [self::PARAM_TYPE_STRING, self::PARAM_ISSET],
			'logisitic_type'    => [self::PARAM_TYPE_STRING, self::PARAM_ISSET],
			'order_status'      => [self::PARAM_TYPE_STRING, self::PARAM_ISSET],
			'date_created_from' => [self::PARAM_TYPE_STRING, self::PARAM_ISSET],
			'date_created_to'   => [self::PARAM_TYPE_STRING, self::PARAM_ISSET],
			'last_updated_from' => [self::PARAM_TYPE_STRING, self::PARAM_ISSET],
			'last_updated_to'   => [self::PARAM_TYPE_STRING, self::PARAM_ISSET],
		));
	}
}