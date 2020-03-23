<?php
/**
 * 产品描述的参数
 */

namespace MercadoLibre\Native\UpdateDescription;

use MercadoLibre\Native\NativeParameter;

/**
 * @property String item_id
 */
class UpdateDescriptionParameter extends NativeParameter
{
	public function __construct($data = [])
	{
		parent::__construct($data, array(
			'item_id' => [self::PARAM_TYPE_STRING, self::PARAM_REQUIRED],
		));
	}
}