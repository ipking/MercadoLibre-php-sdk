<?php

namespace MercadoLibre\GlobalSelling\OrderList\Model;


use MercadoLibre\GlobalSelling\GlobalSellingParameter;
/**
 * @property string id
 * @property string title
 * @property string seller_custom_field
 * @property string category_id
 */
class Item extends GlobalSellingParameter
{
	public function __construct($data = [])
	{
		parent::__construct($data, array(
			'id'                  => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'title'               => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'seller_custom_field' => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'category_id'         => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
		));
	}
}