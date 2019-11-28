<?php
/**
 * 创建退货预报单的参数
 */

namespace MercadoLibre\Native\ItemCreate;

use MercadoLibre\Native\NativeParameter;

/**
 * @property String user_id  用户ID
 */
class ItemCreateParameter extends NativeParameter
{
	public function __construct($data = [])
	{
		parent::__construct($data, array(
			'warehouse_code'                  => [self::PARAM_TYPE_STRING, self::PARAM_REQUIRED],
		));
	}
}