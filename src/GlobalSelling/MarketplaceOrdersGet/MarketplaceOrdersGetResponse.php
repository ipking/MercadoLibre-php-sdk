<?php

namespace MercadoLibre\GlobalSelling\MarketplaceOrdersGet;

use MercadoLibre\Base\BaseErrorMsg;
use MercadoLibre\Base\BaseResponse;
use MercadoLibre\GlobalSelling\MarketplaceOrdersGet\Model\OrderInfo;

/**
 * @property OrderInfo order
 */
class MarketplaceOrdersGetResponse extends BaseResponse{
	public function __construct($result,$errors, $message = 'success', $data = []) {
		$msg = BaseErrorMsg::getMsg($errors);
		$msg and $message = $msg;
		parent::__construct($result,$errors, $message, $data, array(
			'order' => [self::PARAM_TYPE_OBJECT, self::PARAM_OPTIONAL, OrderInfo::class],
		));
	}
}
