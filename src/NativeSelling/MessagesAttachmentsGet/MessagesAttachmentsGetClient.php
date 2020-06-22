<?php


namespace MercadoLibre\NativeSelling\MessagesAttachmentsGet;


use MercadoLibre\Core\Response;
use MercadoLibre\NativeSelling\NativeSellingClient;

class MessagesAttachmentsGetClient extends NativeSellingClient {
	
	protected $method = self::METHOD_GET;
	
	
	public function __construct(MessagesAttachmentsGetParameter $parameter) {
		parent::__construct('/messages/attachments/'.$parameter->attachment_id,$parameter);
	}

	public function send() {
		$rsp_data = parent::send();
		
		return new MessagesAttachmentsGetResponse(
			$rsp_data['message']?Response::RESULT_FAIL:Response::RESULT_SUCCESS,
			$rsp_data['cause'],
			$rsp_data['message']?$rsp_data['message']:'success',
			$rsp_data);
	}
}