<?php
/**
 * 产品列表
 */

namespace MercadoLibre\Native\ItemList;
use MercadoLibre\Core\Response;
use MercadoLibre\Native\NativeClient;

class ItemListClient extends NativeClient {
	
	protected $method = 'GET';
	
	public function __construct(ItemListParameter $parameter) {
		$param = [
			'offset' => $parameter->offset,
			'limit'  => $parameter->limit,
		];
		parent::__construct('/users/'.$parameter->user_id.'/items/search?'.http_build_query($param),$parameter);
	}

	public function send() {
		$rsp_data = parent::send();
		$rsp_data['item_ids']=$rsp_data['results'];
		return new ItemListResponse(
			$rsp_data['error']?Response::RESULT_FAIL:Response::RESULT_SUCCESS,
			$rsp_data['cause'],
			$rsp_data['error']?$rsp_data['message']:'success',
			$rsp_data);
	}
}