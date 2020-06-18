<?php


namespace MercadoLibre\NativeSelling\ClaimExpectedResolutionList;
use MercadoLibre\Core\Response;
use MercadoLibre\NativeSelling\NativeSellingClient;

class ClaimExpectedResolutionListClient extends NativeSellingClient {
	
	protected $method = self::METHOD_GET;
	
	public function __construct(ClaimExpectedResolutionListParameter $parameter) {
		
		parent::__construct('/v1/claims/'.$parameter->claim_id.'/expected_resolutions',$parameter);
	}

	public function send() {
		$rsp_data = parent::send();
	
		return new ClaimExpectedResolutionListResponse(
			$rsp_data['error']?Response::RESULT_FAIL:Response::RESULT_SUCCESS,
			$rsp_data['cause'],
			$rsp_data['error']?$rsp_data['message']:'success',
			['expected_resolutions'=>$rsp_data]);
	}
}