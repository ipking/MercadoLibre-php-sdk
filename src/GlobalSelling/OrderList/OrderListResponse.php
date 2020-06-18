<?php
/**
 * 订单列表的响应
 */

namespace MercadoLibre\GlobalSelling\OrderList;
use MercadoLibre\GlobalSelling\Model\Paging;
use MercadoLibre\GlobalSelling\GlobalSellingErrorMsg;
use MercadoLibre\GlobalSelling\GlobalSellingResponse;
use MercadoLibre\GlobalSelling\OrderList\Model\OrderInfo;

/**
 * @property OrderInfo[] orders
 * @property Paging paging
 */
class OrderListResponse extends GlobalSellingResponse{
	public function __construct($result,$errors, $message = 'success', $data = []) {
		$msg = GlobalSellingErrorMsg::getMsg($errors);
		$msg and $message = $msg;
		parent::__construct($result,$errors, $message, $data, array(
			'orders' => [self::PARAM_TYPE_ARRAY, self::PARAM_OPTIONAL, OrderInfo::class],
			'paging'   => [self::PARAM_TYPE_OBJECT, self::PARAM_OPTIONAL, Paging::class],
		));
	}
}
