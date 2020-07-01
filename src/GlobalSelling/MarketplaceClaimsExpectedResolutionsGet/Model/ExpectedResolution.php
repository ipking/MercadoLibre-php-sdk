<?php

namespace MercadoLibre\GlobalSelling\MarketplaceClaimsExpectedResolutionsGet\Model;


use MercadoLibre\Base\BaseParameter;

/**
 * @property string player_role
 * @property string user_id
 * @property string expected_resolution
 * @property string date_created
 * @property string last_updated
 * @property string status
 */
class ExpectedResolution extends BaseParameter
{
	/**
	- refund: the player expects a money refund
	- product: the player expects to receive the product
	- change_product: the player expects to change the product
	- return_product: the player expects to have the product returned with the subsequent money refund
	 */
	const EXPECTED_RESOLUTION_REFUND = 'refund';
	const EXPECTED_RESOLUTION_PRODUCT = 'product';
	const EXPECTED_RESOLUTION_CHANGE_PRODUCT = 'change_product';
	const EXPECTED_RESOLUTION_RETURN_PRODUCT = 'return_product';
	
	public function __construct($data = [])
	{
		parent::__construct($data, array(
			'player_role'         => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'user_id'             => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'expected_resolution' => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'date_created'        => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'last_updated'        => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'status'              => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
		));
	}
}



