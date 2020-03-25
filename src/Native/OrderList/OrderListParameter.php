<?php
/**
 * 订单列表的参数
 */

namespace MercadoLibre\Native\OrderList;

use MercadoLibre\Native\NativeParameter;

/**
 * @property String user_id
 * @property String offset
 * @property String limit
 */
class OrderListParameter extends NativeParameter
{
	public function __construct($data = [])
	{
		parent::__construct($data, array(
			'user_id' => [self::PARAM_TYPE_STRING, self::PARAM_REQUIRED],
			'offset'  => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'limit'   => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
		));
	}
}