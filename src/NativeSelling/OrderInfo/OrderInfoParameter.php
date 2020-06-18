<?php
/**
 * 订单列表的参数
 */

namespace MercadoLibre\NativeSelling\OrderInfo;

use MercadoLibre\NativeSelling\NativeSellingParameter;

/**
 * @property String order_id
 */
class OrderInfoParameter extends NativeSellingParameter
{
	public function __construct($data = [])
	{
		parent::__construct($data, array(
			'order_id'         => [self::PARAM_TYPE_STRING, self::PARAM_REQUIRED],
		));
	}
}