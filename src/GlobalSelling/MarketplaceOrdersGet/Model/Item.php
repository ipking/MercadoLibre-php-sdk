<?php

namespace MercadoLibre\GlobalSelling\MarketplaceOrdersGet\Model;


use MercadoLibre\Base\BaseParameter;

/**
 * @property string id
 * @property string title
 * @property string category_id
 * @property string variation_id
 * @property string seller_custom_field
 * @property string condition
 * @property string seller_sku
 * @property string parent_item_id
 */
class Item extends BaseParameter
{
	public function __construct($data = [])
	{
		parent::__construct($data, array(
			'id'                  => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'title'               => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'category_id'         => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'variation_id'        => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'seller_custom_field' => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'condition'           => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'seller_sku'          => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'parent_item_id'      => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
		));
	}
}