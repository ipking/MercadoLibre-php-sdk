<?php
/**
 * 产品列表
 */

namespace MercadoLibre\NativeSelling\ItemsSearchGet;
use MercadoLibre\Core\Response;
use MercadoLibre\NativeSelling\NativeSellingClient;

class ItemsSearchGetClient extends NativeSellingClient {
	
	protected $method = self::METHOD_GET;
	
	public function __construct(ItemsSearchGetParameter $parameter) {
		$param = [
			'offset' => $parameter->offset,
			'limit'  => $parameter->limit,
		];
		parent::__construct('/users/'.$parameter->seller_id.'/items/search?'.http_build_query($param),$parameter);
	}

	public function send() {
		$rsp_data = parent::send();
		$rsp_data['item_ids']=$rsp_data['results'];
		return new ItemsSearchGetResponse(
			$rsp_data['error']?Response::RESULT_FAIL:Response::RESULT_SUCCESS,
			$rsp_data['cause'],
			$rsp_data['error']?$rsp_data['message']:'success',
			$rsp_data);
	}
}