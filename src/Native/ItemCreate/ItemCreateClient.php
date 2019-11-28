<?php
/**
 * 创建产品
 */

namespace MercadoLibre\Native\ItemCreate;
use MercadoLibre\Native\NativeClient;

class ItemCreateClient extends NativeClient {
	
	protected $method = 'PUT';
	
	public function __construct(ItemCreateParameter $parameter) {
		parent::__construct('/items',$parameter);
	}

	public function send() {
		$rsp_data = parent::send();
		return new ItemCreateResponse($rsp_data['result'],$rsp_data['error'], $rsp_data['msg'], ['rma_no' =>$rsp_data['data']]);
	}
}