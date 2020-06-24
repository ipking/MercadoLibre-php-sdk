<?php

namespace MercadoLibre\GlobalSelling\ItemsMarketplaceItemsGet\Model;


use MercadoLibre\Base\BaseParameter;

/**
 * @property string item_id
 * @property string user_id
 * @property string site_id
 * @property string date_created
 * @property string parent_id
 */
class MarketplaceItem extends BaseParameter
{
	public function __construct($data = [])
	{
		parent::__construct($data, array(
			'item_id'                          => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'user_id'                          => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'site_id'                          => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'date_created'                          => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'parent_id'                          => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
		));
	}
}