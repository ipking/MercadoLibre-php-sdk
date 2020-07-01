<?php


namespace MercadoLibre\GlobalSelling\MarketplaceClaimsSearchGet;

use MercadoLibre\Base\BaseParameter;

/**
 * @property String offset
 * @property String limit
 * @property String id
 * @property String type
 * @property String stage
 * @property String status
 * @property String resource_id
 * @property String resource
 * @property String reason_id
 * @property String site_id
 * @property String order_id
 * @property String payment_id
 * @property String parent_id
 * @property String date_created
 * @property String last_updated
 */
class MarketplaceClaimsSearchGetParameter extends BaseParameter
{
	public function __construct($data = [])
	{
		parent::__construct($data, array(
			'offset'       => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'limit'        => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'id'           => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'type'         => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'stage'        => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'status'       => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'resource_id'  => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'resource'     => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'reason_id'    => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'site_id'      => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'order_id'     => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'payment_id'   => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'parent_id'    => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'date_created' => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'last_updated' => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
		));
	}
}













