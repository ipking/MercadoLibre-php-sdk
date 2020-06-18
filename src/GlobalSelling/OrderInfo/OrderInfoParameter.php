<?php
/**
 * 订单列表的参数
 */

namespace MercadoLibre\GlobalSelling\OrderInfo;

use MercadoLibre\GlobalSelling\GlobalSellingParameter;

/**
 * @property String order_id
 */
class OrderInfoParameter extends GlobalSellingParameter
{
	public function __construct($data = [])
	{
		parent::__construct($data, array(
			'order_id'         => [self::PARAM_TYPE_STRING, self::PARAM_REQUIRED],
		));
	}
}