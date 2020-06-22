<?php
/**
 * 产品描述的参数
 */

namespace MercadoLibre\NativeSelling\ItemsDescriptionGet;

use MercadoLibre\Base\BaseParameter;

/**
 * @property String item_id
 */
class ItemsDescriptionGetParameter extends BaseParameter
{
	public function __construct($data = [])
	{
		parent::__construct($data, array(
			'item_id' => [self::PARAM_TYPE_STRING, self::PARAM_REQUIRED],
		));
	}
}