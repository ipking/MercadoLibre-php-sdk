<?php


namespace MercadoLibre\NativeSelling\ClaimsAttachmentsGet;


use MercadoLibre\Core\Response;
use MercadoLibre\Base\BaseClient;

class ClaimsAttachmentsGetClient extends BaseClient {
	
	protected $method = self::METHOD_GET;
	
	
	public function __construct(ClaimsAttachmentsGetParameter $parameter) {
		parent::__construct('/v1/claims/'.$parameter->claim_id.'/attachments/'.$parameter->attach_id,$parameter);
	}

	public function send() {
		$rsp_data = parent::send();
		
		return new ClaimsAttachmentsGetResponse(
			$rsp_data['message']?Response::RESULT_FAIL:Response::RESULT_SUCCESS,
			$rsp_data['cause'],
			$rsp_data['message']?$rsp_data['message']:'success',
			$rsp_data);
	}
}