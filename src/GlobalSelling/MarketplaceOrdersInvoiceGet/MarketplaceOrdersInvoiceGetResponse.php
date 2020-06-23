<?php

namespace MercadoLibre\GlobalSelling\MarketplaceOrdersInvoiceGet;
use MercadoLibre\Base\BaseErrorMsg;
use MercadoLibre\Base\BaseResponse;

/**
 * @property string invoice
 */
class MarketplaceOrdersInvoiceGetResponse extends BaseResponse{
	public function __construct($result,$errors, $message = 'success', $data = []) {
		$msg = BaseErrorMsg::getMsg($errors);
		$msg and $message = $msg;
		parent::__construct($result,$errors, $message, $data, array(
			'invoice' => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
		));
	}
}
