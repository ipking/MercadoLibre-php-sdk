<?php
/**
 * 更新产品的参数
 */

namespace MercadoLibre\NativeSelling\ItemsPut;

use MercadoLibre\Base\BaseParameter;

/**
 * @property String item_id
 */
class ItemsPutParameter extends BaseParameter
{
	public function __construct($data = [])
	{
		parent::__construct($data, array(
			'item_id' => [self::PARAM_TYPE_STRING, self::PARAM_REQUIRED],
		));
	}
}