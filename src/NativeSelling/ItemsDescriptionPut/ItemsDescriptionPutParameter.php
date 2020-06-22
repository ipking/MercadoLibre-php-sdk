<?php
/**
 * 产品描述的参数
 */

namespace MercadoLibre\NativeSelling\ItemsDescriptionPut;

use MercadoLibre\Base\BaseParameter;

/**
 * @property String item_id
 * @property String plain_text
 */
class ItemsDescriptionPutParameter extends BaseParameter
{
	public function __construct($data = [])
	{
		parent::__construct($data, array(
			'item_id'    => [self::PARAM_TYPE_STRING, self::PARAM_REQUIRED],
			'plain_text' => [self::PARAM_TYPE_STRING, self::PARAM_REQUIRED],
		));
	}
}