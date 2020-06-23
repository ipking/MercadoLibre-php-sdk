<?php

namespace MercadoLibre\GlobalSelling\MarketplaceOrdersInvoiceGet;

use MercadoLibre\Core\Response;
use MercadoLibre\Base\BaseClient;

class MarketplaceOrdersInvoiceGetClient extends BaseClient {
	
	protected $method = self::METHOD_GET;
	
	public function __construct(MarketplaceOrdersInvoiceGetParameter $parameter) {
		parent::__construct('/marketplace/orders/'.$parameter->order_id.'/invoice',$parameter);
	}

	public function send() {
		$rsp_data = parent::send();
		return new MarketplaceOrdersInvoiceGetResponse(
			$rsp_data['error']?Response::RESULT_FAIL:Response::RESULT_SUCCESS,
			$rsp_data['cause'],
			$rsp_data['error']?$rsp_data['message']:'success',
			['invoice'=>$rsp_data]);
	}
}