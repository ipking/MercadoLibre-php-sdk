<?php
/**
 * 产品描述的参数
 */

namespace MercadoLibre\GlobalSelling\ItemUpdateDescription;

use MercadoLibre\GlobalSelling\GlobalSellingParameter;

/**
 * @property String item_id
 * @property String plain_text
 */
class ItemUpdateDescriptionParameter extends GlobalSellingParameter
{
	public function __construct($data = [])
	{
		parent::__construct($data, array(
			'item_id'    => [self::PARAM_TYPE_STRING, self::PARAM_REQUIRED],
			'plain_text' => [self::PARAM_TYPE_STRING, self::PARAM_REQUIRED],
		));
	}
}