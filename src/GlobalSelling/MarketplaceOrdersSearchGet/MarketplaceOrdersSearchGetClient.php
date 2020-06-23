<?php

namespace MercadoLibre\GlobalSelling\MarketplaceOrdersSearchGet;

use MercadoLibre\Core\Response;
use MercadoLibre\Base\BaseClient;

class MarketplaceOrdersSearchGetClient extends BaseClient {
	
	protected $method = self::METHOD_GET;
	
	public function __construct(MarketplaceOrdersSearchGetParameter $parameter) {
		$param = [
			'offset'            => $parameter->offset,
			'limit'             => $parameter->limit,
			'buyer'             => $parameter->buyer_id,
			'seller.id'         => $parameter->seller_id,
			'site'              => $parameter->site_id,
			'logisitic.type'    => $parameter->logisitic_type,
			'order.status'      => $parameter->order_status,
			'date_created.from' => $parameter->date_created_from,
			'date_created.to'   => $parameter->date_created_to,
		];
		parent::__construct('/marketplace/orders/search?'.http_build_query($param),$parameter);
	}

	public function send() {
		$rsp_data = parent::send();
		$rsp_data['orders']=$rsp_data['results'];
		return new MarketplaceOrdersSearchGetResponse(
			$rsp_data['error']?Response::RESULT_FAIL:Response::RESULT_SUCCESS,
			$rsp_data['cause'],
			$rsp_data['error']?$rsp_data['message']:'success',
			$rsp_data);
	}
}