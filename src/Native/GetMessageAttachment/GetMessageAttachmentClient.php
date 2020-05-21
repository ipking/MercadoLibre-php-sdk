<?php


namespace MercadoLibre\Native\GetMessageAttachment;


use MercadoLibre\Core\Response;
use MercadoLibre\Native\NativeClient;

class GetMessageAttachmentClient extends NativeClient {
	
	protected $method = self::METHOD_GET;
	
	
	public function __construct(GetMessageAttachmentParameter $parameter) {
		parent::__construct('/messages/attachments/'.$parameter->attachment_id);
	}

	public function send() {
		
		$rsp_data = parent::sendData([]);
		
		return new GetMessageAttachmentResponse(
			$rsp_data['message']?Response::RESULT_FAIL:Response::RESULT_SUCCESS,
			$rsp_data['cause'],
			$rsp_data['message']?$rsp_data['message']:'success',
			$rsp_data);
	}
}