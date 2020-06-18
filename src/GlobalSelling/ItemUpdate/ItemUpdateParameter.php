<?php
/**
 * 更新产品的参数
 */

namespace MercadoLibre\GlobalSelling\ItemUpdate;

use MercadoLibre\GlobalSelling\GlobalSellingParameter;

/**
 * @property String item_id
 */
class ItemUpdateParameter extends GlobalSellingParameter
{
	public function __construct($data = [])
	{
		parent::__construct($data, array(
			'item_id' => [self::PARAM_TYPE_STRING, self::PARAM_REQUIRED],
		));
	}
}