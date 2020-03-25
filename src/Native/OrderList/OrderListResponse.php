<?php
/**
 * 订单列表的响应
 */

namespace MercadoLibre\Native\OrderList;
use MercadoLibre\Native\Model\Paging;
use MercadoLibre\Native\NativeErrorMsg;
use MercadoLibre\Native\NativeResponse;
use MercadoLibre\Native\OrderList\Model\OrderInfo;

/**
 * @property OrderInfo[] orders
 * @property Paging paging
 */
class OrderListResponse extends NativeResponse{
	public function __construct($result,$errors, $message = 'success', $data = []) {
		$msg = NativeErrorMsg::getMsg($errors);
		$msg and $message = $msg;
		parent::__construct($result,$errors, $message, $data, array(
			'orders' => [self::PARAM_TYPE_ARRAY, self::PARAM_OPTIONAL, OrderInfo::class],
			'paging'   => [self::PARAM_TYPE_OBJECT, self::PARAM_OPTIONAL, Paging::class],
		));
	}
}
