<?php


namespace MercadoLibre\Native\ClaimInfo;
use MercadoLibre\Core\Response;
use MercadoLibre\Native\NativeClient;

class ClaimInfoClient extends NativeClient {
	
	protected $method = self::METHOD_GET;
	
	public function __construct(ClaimInfoParameter $parameter) {
		
		parent::__construct('/v1/claims/'.$parameter->claim_id,$parameter);
	}

	public function send() {
		$rsp_data = parent::send();
	
		return new ClaimInfoResponse(
			$rsp_data['error']?Response::RESULT_FAIL:Response::RESULT_SUCCESS,
			$rsp_data['cause'],
			$rsp_data['error']?$rsp_data['message']:'success',
			['claim'=>$rsp_data]);
	}
}