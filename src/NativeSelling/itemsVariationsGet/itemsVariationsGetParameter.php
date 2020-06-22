<?php
/**
 * 产品变体的参数
 */

namespace MercadoLibre\NativeSelling\itemsVariationsGet;

use MercadoLibre\Base\BaseParameter;

/**
 * @property String item_id
 * @property String variation_id
 */
class itemsVariationsGetParameter extends BaseParameter
{
	public function __construct($data = [])
	{
		parent::__construct($data, array(
			'item_id'      => [self::PARAM_TYPE_STRING, self::PARAM_REQUIRED],
			'variation_id' => [self::PARAM_TYPE_STRING, self::PARAM_REQUIRED],
		));
	}
}