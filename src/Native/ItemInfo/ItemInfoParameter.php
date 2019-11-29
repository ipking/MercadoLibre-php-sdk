<?php
/**
 * 产品信息的参数
 */

namespace MercadoLibre\Native\ItemInfo;

use MercadoLibre\Native\NativeParameter;

/**
 * @property String item_id
 */
class ItemInfoParameter extends NativeParameter
{
	public function __construct($data = [])
	{
		parent::__construct($data, array(
			'item_id' => [self::PARAM_TYPE_STRING, self::PARAM_REQUIRED],
		));
	}
}