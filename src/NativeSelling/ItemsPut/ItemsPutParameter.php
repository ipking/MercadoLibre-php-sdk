<?php
/**
 * 更新产品的参数
 */

namespace MercadoLibre\NativeSelling\ItemsPut;

use MercadoLibre\NativeSelling\NativeSellingParameter;

/**
 * @property String item_id
 */
class ItemsPutParameter extends NativeSellingParameter
{
	public function __construct($data = [])
	{
		parent::__construct($data, array(
			'item_id' => [self::PARAM_TYPE_STRING, self::PARAM_REQUIRED],
		));
	}
}