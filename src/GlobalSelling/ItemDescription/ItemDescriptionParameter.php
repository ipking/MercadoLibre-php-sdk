<?php
/**
 * 产品描述的参数
 */

namespace MercadoLibre\GlobalSelling\ItemDescription;

use MercadoLibre\GlobalSelling\GlobalSellingParameter;

/**
 * @property String item_id
 */
class ItemDescriptionParameter extends GlobalSellingParameter
{
	public function __construct($data = [])
	{
		parent::__construct($data, array(
			'item_id' => [self::PARAM_TYPE_STRING, self::PARAM_REQUIRED],
		));
	}
}