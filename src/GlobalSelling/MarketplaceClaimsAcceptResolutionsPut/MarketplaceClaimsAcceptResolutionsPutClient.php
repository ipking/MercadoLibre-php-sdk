<?php


namespace MercadoLibre\GlobalSelling\MarketplaceClaimsAcceptResolutionsPut;
use MercadoLibre\Core\Response;
use MercadoLibre\Base\BaseClient;

class MarketplaceClaimsAcceptResolutionsPutClient extends BaseClient {
	
	protected $method = self::METHOD_PUT;
	
	public function __construct(MarketplaceClaimsAcceptResolutionsPutParameter $parameter) {
		
		parent::__construct('/marketplace/claims/'.$parameter->claim_id.'/expected_resolutions',$parameter);
	}

	public function send() {
		$data = [
			'status'=>'accepted'
		];
		$rsp_data = parent::sendData($data);
	
		return new MarketplaceClaimsAcceptResolutionsPutResponse(
			$rsp_data['error']?Response::RESULT_FAIL:Response::RESULT_SUCCESS,
			$rsp_data['cause'],
			$rsp_data['error']?$rsp_data['message']:'success',
			['expected_resolutions'=>$rsp_data]);
	}
}