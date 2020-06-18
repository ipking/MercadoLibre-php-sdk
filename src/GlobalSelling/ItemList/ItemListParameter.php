<?php
/**
 * 产品列表的参数
 */

namespace MercadoLibre\GlobalSelling\ItemList;

use MercadoLibre\GlobalSelling\GlobalSellingParameter;

/**
 * @property String $seller_id
 * @property String offset
 * @property String limit
 */
class ItemListParameter extends GlobalSellingParameter
{
	public function __construct($data = [])
	{
		parent::__construct($data, array(
			'seller_id' => [self::PARAM_TYPE_STRING, self::PARAM_REQUIRED],
			'offset'    => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'limit'     => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
		));
	}
}