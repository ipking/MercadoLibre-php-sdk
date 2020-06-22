<?php
/**
 * 产品信息的参数
 */

namespace MercadoLibre\NativeSelling\ItemsGet;

use MercadoLibre\NativeSelling\NativeSellingParameter;

/**
 * @property String item_id
 */
class ItemsGetParameter extends NativeSellingParameter
{
	public function __construct($data = [])
	{
		parent::__construct($data, array(
			'item_id' => [self::PARAM_TYPE_STRING, self::PARAM_REQUIRED],
		));
	}
}