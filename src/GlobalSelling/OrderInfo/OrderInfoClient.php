<?php
/**
 * 订单信息
 */

namespace MercadoLibre\GlobalSelling\OrderInfo;
use MercadoLibre\Core\Response;
use MercadoLibre\GlobalSelling\GlobalSellingClient;

class OrderInfoClient extends GlobalSellingClient {
	
	protected $method = self::METHOD_GET;
	
	public function __construct(OrderInfoParameter $parameter) {
		
		parent::__construct('/orders/'.$parameter->order_id,$parameter);
	}

	public function send() {
		$rsp_data = parent::send();
		$rsp_data['orders']=$rsp_data['results'];
		return new OrderInfoResponse(
			$rsp_data['error']?Response::RESULT_FAIL:Response::RESULT_SUCCESS,
			$rsp_data['cause'],
			$rsp_data['error']?$rsp_data['message']:'success',
			['order'=>$rsp_data]);
	}
}