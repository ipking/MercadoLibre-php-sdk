<?php


namespace MercadoLibre\GlobalSelling\ClaimRequestMediation;
use MercadoLibre\Core\Response;
use MercadoLibre\GlobalSelling\GlobalSellingClient;

class ClaimRequestMediationClient extends GlobalSellingClient {
	
	protected $method = self::METHOD_PUT;
	
	public function __construct(ClaimRequestMediationParameter $parameter) {
		
		parent::__construct('/v1/claims/'.$parameter->claim_id,$parameter);
	}

	public function send() {
		$data = [
			'stage'=>'dispute'
		];
		$rsp_data = parent::sendData($data);
	
		return new ClaimRequestMediationResponse(
			$rsp_data['error']?Response::RESULT_FAIL:Response::RESULT_SUCCESS,
			$rsp_data['cause'],
			$rsp_data['error']?$rsp_data['message']:'success',
			['claim'=>$rsp_data]);
	}
}