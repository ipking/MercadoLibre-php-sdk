<?php


namespace MercadoLibre\Native\MessageAttachment;


use MercadoLibre\Core\Response;
use MercadoLibre\Native\NativeClient;

class MessageAttachmentClient extends NativeClient {
	
	protected $method = self::METHOD_GET;
	
	
	public function __construct(MessageAttachmentParameter $parameter) {
		parent::__construct('/messages/attachments/'.$parameter->attachment_id,$parameter);
	}

	public function send() {
		$rsp_data = parent::send();
		
		return new MessageAttachmentResponse(
			$rsp_data['message']?Response::RESULT_FAIL:Response::RESULT_SUCCESS,
			$rsp_data['cause'],
			$rsp_data['message']?$rsp_data['message']:'success',
			$rsp_data);
	}
}