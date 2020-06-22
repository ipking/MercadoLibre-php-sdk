<?php
/**
 * 产品列表的参数
 */

namespace MercadoLibre\NativeSelling\ItemsSearchGet;

use MercadoLibre\NativeSelling\NativeSellingParameter;

/**
 * @property String $seller_id
 * @property String offset
 * @property String limit
 */
class ItemsSearchGetParameter extends NativeSellingParameter
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