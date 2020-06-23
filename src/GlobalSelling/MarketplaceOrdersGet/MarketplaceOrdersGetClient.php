<?php

namespace MercadoLibre\GlobalSelling\MarketplaceOrdersGet;

use MercadoLibre\Core\Response;
use MercadoLibre\Base\BaseClient;

class MarketplaceOrdersGetClient extends BaseClient {
	
	protected $method = self::METHOD_GET;
	
	public function __construct(MarketplaceOrdersGetParameter $parameter) {
		
		parent::__construct('/marketplace/orders/'.$parameter->order_id,$parameter);
	}

	public function send() {
		$rsp_data = parent::send();
		return new MarketplaceOrdersGetResponse(
			$rsp_data['error']?Response::RESULT_FAIL:Response::RESULT_SUCCESS,
			$rsp_data['cause'],
			$rsp_data['error']?$rsp_data['message']:'success',
			['order'=>$rsp_data]);
	}
}