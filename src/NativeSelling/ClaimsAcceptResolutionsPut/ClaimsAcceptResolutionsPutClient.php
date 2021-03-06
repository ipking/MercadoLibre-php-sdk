<?php


namespace MercadoLibre\NativeSelling\ClaimsAcceptResolutionsPut;
use MercadoLibre\Core\Response;
use MercadoLibre\Base\BaseClient;

class ClaimsAcceptResolutionsPutClient extends BaseClient {
	
	protected $method = self::METHOD_PUT;
	
	public function __construct(ClaimsAcceptResolutionsPutParameter $parameter) {
		
		parent::__construct('/v1/claims/'.$parameter->claim_id.'/expected_resolutions',$parameter);
	}

	public function send() {
		$data = [
			'status'=>'accepted'
		];
		$rsp_data = parent::sendData($data);
	
		return new ClaimsAcceptResolutionsPutResponse(
			$rsp_data['error']?Response::RESULT_FAIL:Response::RESULT_SUCCESS,
			$rsp_data['cause'],
			$rsp_data['error']?$rsp_data['message']:'success',
			['expected_resolutions'=>$rsp_data]);
	}
}