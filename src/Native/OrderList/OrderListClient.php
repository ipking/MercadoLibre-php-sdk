<?php
/**
 * 订单列表
 */

namespace MercadoLibre\Native\OrderList;
use MercadoLibre\Core\Response;
use MercadoLibre\Native\NativeClient;

class OrderListClient extends NativeClient {
	
	protected $method = self::METHOD_GET;
	
	public function __construct(OrderListParameter $parameter) {
		$param = [
			'offset'                       => $parameter->offset,
			'limit'                        => $parameter->limit,
			'seller'                       => $parameter->seller_id,
			'q'                            => $parameter->q,
			'order.status'                 => $parameter->order_status,
			'order.date_last_updated.from' => $parameter->order_date_last_updated_from,
			'order.date_last_updated.to'   => $parameter->order_date_last_updated_to,
		];
		parent::__construct('/orders/search?'.http_build_query($param),$parameter);
	}

	public function send() {
		$rsp_data = parent::send();
		$rsp_data['orders']=$rsp_data['results'];
		return new OrderListResponse(
			$rsp_data['error']?Response::RESULT_FAIL:Response::RESULT_SUCCESS,
			$rsp_data['cause'],
			$rsp_data['error']?$rsp_data['message']:'success',
			$rsp_data);
	}
}