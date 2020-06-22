<?php

namespace MercadoLibre\GlobalSelling\ItemsGet\Model;


use MercadoLibre\Base\BaseParameter;

/**
 * @property string id
 * @property string site_id
 * @property string date_created
 * @property string title
 * @property string listing_type_id
 * @property string permalink
 * @property string status
 * @property string warranty
 * @property string catalog_product_id
 * @property string domain_id
 * @property string international_delivery_mode
 * @property string inventory_id
 * @property string category_id
 * @property string official_store_id
 * @property string sold_quantity
 * @property string available_quantity
 * @property string last_updated
 * @property string seller_id
 * @property string price
 * @property string currency_id
 * @property string base_exchange_rate
 * @property string user_logistic_type
 * @property string owner_id
 * @property string cbt_item_id
 */
class ItemInfo extends BaseParameter
{
	public function __construct($data = [])
	{
		parent::__construct($data, array(
			'id'                          => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'site_id'                     => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'date_created'                => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'title'                       => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'listing_type_id'             => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'permalink'                   => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'status'                      => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'warranty'                    => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'catalog_product_id'          => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'domain_id'                   => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'international_delivery_mode' => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'inventory_id'                => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'category_id'                 => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'official_store_id'           => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'sold_quantity'               => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'available_quantity'          => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'last_updated'                => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'seller_id'                   => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'price'                       => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'currency_id'                 => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'base_exchange_rate'          => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'user_logistic_type'          => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'owner_id'                    => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'cbt_item_id'                 => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			
		));
	}
}
