<?php
/**
 * 产品描述的参数
 */

namespace MercadoLibre\NativeSelling\DeleteVariations;

use MercadoLibre\NativeSelling\NativeSellingParameter;

/**
 * @property String item_id
 * @property String variations_id
 */
class DeleteVariationsParameter extends NativeSellingParameter
{
	public function __construct($data = [])
	{
		parent::__construct($data, array(
			'item_id'       => [self::PARAM_TYPE_STRING, self::PARAM_REQUIRED],
			'variations_id' => [self::PARAM_TYPE_STRING, self::PARAM_REQUIRED],
		));
	}
}