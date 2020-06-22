<?php


namespace MercadoLibre\NativeSelling\ClaimsPut;
use MercadoLibre\Core\Response;
use MercadoLibre\NativeSelling\NativeSellingClient;

class ClaimsPutClient extends NativeSellingClient {
	
	protected $method = self::METHOD_PUT;
	
	public function __construct(ClaimsPutParameter $parameter) {
		
		parent::__construct('/v1/claims/'.$parameter->claim_id,$parameter);
	}

	public function send() {
		$data = [
			'stage'=>'dispute'
		];
		$rsp_data = parent::sendData($data);
	
		return new ClaimsPutResponse(
			$rsp_data['error']?Response::RESULT_FAIL:Response::RESULT_SUCCESS,
			$rsp_data['cause'],
			$rsp_data['error']?$rsp_data['message']:'success',
			['claim'=>$rsp_data]);
	}
}