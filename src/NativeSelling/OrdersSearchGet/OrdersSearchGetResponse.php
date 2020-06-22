<?php
/**
 * 订单列表的响应
 */

namespace MercadoLibre\NativeSelling\OrdersSearchGet;
use MercadoLibre\Base\Model\Paging;
use MercadoLibre\Base\BaseErrorMsg;
use MercadoLibre\Base\BaseResponse;
use MercadoLibre\NativeSelling\OrdersSearchGet\Model\OrderInfo;

/**
 * @property OrderInfo[] orders
 * @property Paging paging
 */
class OrdersSearchGetResponse extends BaseResponse{
	public function __construct($result,$errors, $message = 'success', $data = []) {
		$msg = BaseErrorMsg::getMsg($errors);
		$msg and $message = $msg;
		parent::__construct($result,$errors, $message, $data, array(
			'orders' => [self::PARAM_TYPE_ARRAY, self::PARAM_OPTIONAL, OrderInfo::class],
			'paging'   => [self::PARAM_TYPE_OBJECT, self::PARAM_OPTIONAL, Paging::class],
		));
	}
}
