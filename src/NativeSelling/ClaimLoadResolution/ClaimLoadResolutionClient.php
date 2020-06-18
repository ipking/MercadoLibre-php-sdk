<?php


namespace MercadoLibre\NativeSelling\ClaimLoadResolution;
use MercadoLibre\Core\Response;
use MercadoLibre\NativeSelling\NativeSellingClient;

class ClaimLoadResolutionClient extends NativeSellingClient {
	
	protected $method = self::METHOD_POST;
	
	public function __construct(ClaimLoadResolutionParameter $parameter) {
		
		parent::__construct('/v1/claims/'.$parameter->claim_id.'/expected_resolutions',$parameter);
	}

	public function send() {
		$param = $this->getParam();
		/**
		 * @var ClaimLoadResolutionParameter $param
		 */
		$data = [
			'expected_resolution'=>$param->expected_resolution
		];
		$rsp_data = parent::sendData($data);
	
		return new ClaimLoadResolutionResponse(
			$rsp_data['error']?Response::RESULT_FAIL:Response::RESULT_SUCCESS,
			$rsp_data['cause'],
			$rsp_data['error']?$rsp_data['message']:'success',
			['expected_resolutions'=>$rsp_data]);
	}
}