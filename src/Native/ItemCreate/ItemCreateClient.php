<?php
/**
 * 创建产品
 */

namespace MercadoLibre\Native\ItemCreate;
use MercadoLibre\Core\Response;
use MercadoLibre\Native\NativeClient;

class ItemCreateClient extends NativeClient {
	
	protected $method = self::METHOD_POST;
	
	public function __construct(ItemCreateParameter $parameter) {
		parent::__construct('/items',$parameter);
	}

	public function send() {
		$rsp_data = parent::send();
		return new ItemCreateResponse(
			$rsp_data['error']?Response::RESULT_FAIL:Response::RESULT_SUCCESS,
			$rsp_data['cause'],
			$rsp_data['error']?$rsp_data['message']:'success',
			['item' =>$rsp_data]);
	}
}