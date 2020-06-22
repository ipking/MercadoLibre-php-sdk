<?php


namespace MercadoLibre\NativeSelling\ClaimsGet;
use MercadoLibre\Core\Response;
use MercadoLibre\NativeSelling\NativeSellingClient;

class ClaimsGetClient extends NativeSellingClient {
	
	protected $method = self::METHOD_GET;
	
	public function __construct(ClaimsGetParameter $parameter) {
		
		parent::__construct('/v1/claims/'.$parameter->claim_id,$parameter);
	}

	public function send() {
		$rsp_data = parent::send();
	
		return new ClaimsGetResponse(
			$rsp_data['error']?Response::RESULT_FAIL:Response::RESULT_SUCCESS,
			$rsp_data['cause'],
			$rsp_data['error']?$rsp_data['message']:'success',
			['claim'=>$rsp_data]);
	}
}