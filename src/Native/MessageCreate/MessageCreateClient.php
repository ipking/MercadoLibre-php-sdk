<?php


namespace MercadoLibre\Native\MessageCreate;
use MercadoLibre\Core\Response;
use MercadoLibre\Native\NativeClient;

class MessageCreateClient extends NativeClient {
	
	protected $method = self::METHOD_POST;
	protected $post_data = [];
	
	public function __construct(MessageCreateParameter $parameter) {
		
		parent::__construct('/messages/packs/'.$parameter->pack_id.'/sellers/'.$parameter->seller_id,$parameter);
	}
	
	public function setPostData($post_data) {
		$this->post_data = $post_data;
	}
	
	public function send() {
		$rsp_data = parent::sendData($this->post_data);
		
		return new MessageCreateResponse(
			$rsp_data['error']?Response::RESULT_FAIL:Response::RESULT_SUCCESS,
			$rsp_data['cause'],
			$rsp_data['error']?$rsp_data['message']:'success',
			$rsp_data);
	}
}