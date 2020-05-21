<?php
/**
 * 订单列表的参数
 */

namespace MercadoLibre\Native\OrderInfo;

use MercadoLibre\Native\NativeParameter;

/**
 * @property String order_id
 */
class OrderInfoParameter extends NativeParameter
{
	public function __construct($data = [])
	{
		parent::__construct($data, array(
			'order_id'         => [self::PARAM_TYPE_STRING, self::PARAM_REQUIRED],
		));
	}
}