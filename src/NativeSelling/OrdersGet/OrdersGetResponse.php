<?php
/**
 * 订单列表的响应
 */

namespace MercadoLibre\NativeSelling\OrdersGet;
use MercadoLibre\Base\BaseErrorMsg;
use MercadoLibre\Base\BaseResponse;
use MercadoLibre\NativeSelling\OrdersSearchGet\Model\OrderInfo;

/**
 * @property OrderInfo order
 */
class OrdersGetResponse extends BaseResponse{
	public function __construct($result,$errors, $message = 'success', $data = []) {
		$msg = BaseErrorMsg::getMsg($errors);
		$msg and $message = $msg;
		parent::__construct($result,$errors, $message, $data, array(
			'order' => [self::PARAM_TYPE_OBJECT, self::PARAM_OPTIONAL, OrderInfo::class],
		));
	}
}
