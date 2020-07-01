<?php


namespace MercadoLibre\GlobalSelling\MarketplaceClaimsPut;
use MercadoLibre\Core\Response;
use MercadoLibre\Base\BaseClient;

class MarketplaceClaimsPutClient extends BaseClient {
	
	protected $method = self::METHOD_PUT;
	
	public function __construct(MarketplaceClaimsPutParameter $parameter) {
		
		parent::__construct('/marketplace/claims/'.$parameter->claim_id,$parameter);
	}

	public function send() {
		$data = [
			'stage'=>'dispute'
		];
		$rsp_data = parent::sendData($data);
	
		return new MarketplaceClaimsPutResponse(
			$rsp_data['error']?Response::RESULT_FAIL:Response::RESULT_SUCCESS,
			$rsp_data['cause'],
			$rsp_data['error']?$rsp_data['message']:'success',
			['claim'=>$rsp_data]);
	}
}