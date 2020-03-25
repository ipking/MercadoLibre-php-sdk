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
 * @property String q
 * @property String order_status
 * @property String order_date_last_updated_from
 * @property String order_date_last_updated_to
 */
class OrderListParameter extends NativeParameter
{
	public function __construct($data = [])
	{
		parent::__construct($data, array(
			'user_id'                      => [self::PARAM_TYPE_STRING, self::PARAM_REQUIRED],
			'offset'                       => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'limit'                        => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'q'                            => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'order_status'                 => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'order_date_last_updated_from' => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'order_date_last_updated_to'   => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
		));
	}
}