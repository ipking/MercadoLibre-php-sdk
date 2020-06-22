<?php
/**
 * 订单列表的参数
 */

namespace MercadoLibre\NativeSelling\OrdersGet;

use MercadoLibre\Base\BaseParameter;

/**
 * @property String order_id
 */
class OrdersGetParameter extends BaseParameter
{
	public function __construct($data = [])
	{
		parent::__construct($data, array(
			'order_id'         => [self::PARAM_TYPE_STRING, self::PARAM_REQUIRED],
		));
	}
}