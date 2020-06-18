<?php


namespace MercadoLibre\NativeSelling\MessageList;
use MercadoLibre\Core\Response;
use MercadoLibre\NativeSelling\NativeSellingClient;

class MessageListClient extends NativeSellingClient {
	
	protected $method = self::METHOD_GET;
	
	public function __construct(MessageListParameter $parameter) {
		
		parent::__construct('/messages/packs/'.$parameter->pack_id.'/sellers/'.$parameter->seller_id,$parameter);
	}

	public function send() {
		$rsp_data = parent::send();
		
		return new MessageListResponse(
			$rsp_data['error']?Response::RESULT_FAIL:Response::RESULT_SUCCESS,
			$rsp_data['cause'],
			$rsp_data['error']?$rsp_data['message']:'success',
			$rsp_data);
	}
}