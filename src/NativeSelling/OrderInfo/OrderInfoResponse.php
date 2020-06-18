<?php
/**
 * 订单列表的响应
 */

namespace MercadoLibre\NativeSelling\OrderInfo;
use MercadoLibre\NativeSelling\Model\Paging;
use MercadoLibre\NativeSelling\NativeSellingErrorMsg;
use MercadoLibre\NativeSelling\NativeSellingResponse;
use MercadoLibre\NativeSelling\OrderList\Model\OrderInfo;

/**
 * @property OrderInfo order
 */
class OrderInfoResponse extends NativeSellingResponse{
	public function __construct($result,$errors, $message = 'success', $data = []) {
		$msg = NativeSellingErrorMsg::getMsg($errors);
		$msg and $message = $msg;
		parent::__construct($result,$errors, $message, $data, array(
			'order' => [self::PARAM_TYPE_OBJECT, self::PARAM_OPTIONAL, OrderInfo::class],
		));
	}
}
