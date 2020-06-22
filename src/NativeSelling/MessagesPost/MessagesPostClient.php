<?php


namespace MercadoLibre\NativeSelling\MessagesPost;
use MercadoLibre\Core\Response;
use MercadoLibre\NativeSelling\NativeSellingClient;

class MessagesPostClient extends NativeSellingClient {
	
	protected $method = self::METHOD_POST;
	
	public function __construct(MessagesPostParameter $parameter) {
		
		parent::__construct('/messages/packs/'.$parameter->pack_id.'/sellers/'.$parameter->seller_id,$parameter);
	}
	
	
	
	public function send() {
		//校验数据
		$this->param->validateAll();
		$arr_data = $this->param->getDataAsArray($this->param->getDefines());
		unset($arr_data['pack_id']);
		unset($arr_data['seller_id']);
		$rsp_data = parent::sendData($arr_data);
		
		return new MessagesPostResponse(
			$rsp_data['error']?Response::RESULT_FAIL:Response::RESULT_SUCCESS,
			$rsp_data['cause'],
			$rsp_data['error']?$rsp_data['message']:'success',
			$rsp_data);
	}
}