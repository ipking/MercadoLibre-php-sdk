<?php


namespace MercadoLibre\NativeSelling\ClaimAcceptResolution;
use MercadoLibre\Core\Response;
use MercadoLibre\NativeSelling\NativeSellingClient;

class ClaimAcceptResolutionClient extends NativeSellingClient {
	
	protected $method = self::METHOD_PUT;
	
	public function __construct(ClaimAcceptResolutionParameter $parameter) {
		
		parent::__construct('/v1/claims/'.$parameter->claim_id.'/expected_resolutions',$parameter);
	}

	public function send() {
		$data = [
			'status'=>'accepted'
		];
		$rsp_data = parent::sendData($data);
	
		return new ClaimAcceptResolutionResponse(
			$rsp_data['error']?Response::RESULT_FAIL:Response::RESULT_SUCCESS,
			$rsp_data['cause'],
			$rsp_data['error']?$rsp_data['message']:'success',
			['expected_resolutions'=>$rsp_data]);
	}
}