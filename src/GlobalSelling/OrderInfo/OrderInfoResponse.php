<?php
/**
 * 订单列表的响应
 */

namespace MercadoLibre\GlobalSelling\OrderInfo;
use MercadoLibre\GlobalSelling\Model\Paging;
use MercadoLibre\GlobalSelling\GlobalSellingErrorMsg;
use MercadoLibre\GlobalSelling\GlobalSellingResponse;
use MercadoLibre\GlobalSelling\OrderList\Model\OrderInfo;

/**
 * @property OrderInfo order
 */
class OrderInfoResponse extends GlobalSellingResponse{
	public function __construct($result,$errors, $message = 'success', $data = []) {
		$msg = GlobalSellingErrorMsg::getMsg($errors);
		$msg and $message = $msg;
		parent::__construct($result,$errors, $message, $data, array(
			'order' => [self::PARAM_TYPE_OBJECT, self::PARAM_OPTIONAL, OrderInfo::class],
		));
	}
}
