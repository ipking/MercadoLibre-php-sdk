<?php
/**
 * 产品描述的参数
 */

namespace MercadoLibre\Native\ItemUpdateDescription;

use MercadoLibre\Native\NativeParameter;

/**
 * @property String item_id
 */
class ItemUpdateDescriptionParameter extends NativeParameter
{
	public function __construct($data = [])
	{
		parent::__construct($data, array(
			'item_id' => [self::PARAM_TYPE_STRING, self::PARAM_REQUIRED],
		));
	}
}