<?php
/**
 * 产品列表的参数
 */

namespace MercadoLibre\Native\ItemList;

use MercadoLibre\Native\NativeParameter;

/**
 * @property String user_id
 */
class ItemListParameter extends NativeParameter
{
	public function __construct($data = [])
	{
		parent::__construct($data, array(
			'user_id' => [self::PARAM_TYPE_STRING, self::PARAM_REQUIRED],
		));
	}
}