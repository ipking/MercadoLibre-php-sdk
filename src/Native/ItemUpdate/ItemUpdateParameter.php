<?php
/**
 * 更新产品的参数
 */

namespace MercadoLibre\Native\ItemUpdate;

use MercadoLibre\Native\NativeParameter;

/**
 * @property String item_id
 */
class ItemUpdateParameter extends NativeParameter
{
	public function __construct($data = [])
	{
		parent::__construct($data, array(
			'item_id' => [self::PARAM_TYPE_STRING, self::PARAM_REQUIRED],
		));
	}
}