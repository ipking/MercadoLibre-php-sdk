<?php
/**
 * 产品信息的参数
 */

namespace MercadoLibre\GlobalSelling\ItemsGet;

use MercadoLibre\GlobalSelling\GlobalSellingParameter;

/**
 * @property String item_id
 */
class ItemsGetParameter extends GlobalSellingParameter
{
	public function __construct($data = [])
	{
		parent::__construct($data, array(
			'item_id' => [self::PARAM_TYPE_STRING, self::PARAM_REQUIRED],
		));
	}
}