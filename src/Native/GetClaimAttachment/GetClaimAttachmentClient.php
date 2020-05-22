<?php


namespace MercadoLibre\Native\GetClaimAttachment;


use MercadoLibre\Core\Response;
use MercadoLibre\Native\NativeClient;

class GetClaimAttachmentClient extends NativeClient {
	
	protected $method = self::METHOD_GET;
	
	
	public function __construct(GetClaimAttachmentParameter $parameter) {
		parent::__construct('/v1/claims/'.$parameter->claim_id.'/attachments/'.$parameter->attach_id,$parameter);
	}

	public function send() {
		$rsp_data = parent::send();
		
		return new GetClaimAttachmentResponse(
			$rsp_data['message']?Response::RESULT_FAIL:Response::RESULT_SUCCESS,
			$rsp_data['cause'],
			$rsp_data['message']?$rsp_data['message']:'success',
			$rsp_data);
	}
}