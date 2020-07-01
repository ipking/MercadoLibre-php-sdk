<?php


namespace MercadoLibre\GlobalSelling\MarketplaceClaimsGet;
use MercadoLibre\Core\Response;
use MercadoLibre\Base\BaseClient;

class MarketplaceClaimsGetClient extends BaseClient {
	
	protected $method = self::METHOD_GET;
	
	public function __construct(MarketplaceClaimsGetParameter $parameter) {
		
		parent::__construct('/marketplace/claims/'.$parameter->claim_id,$parameter);
	}

	public function send() {
		$rsp_data = parent::send();
	
		return new MarketplaceClaimsGetResponse(
			$rsp_data['error']?Response::RESULT_FAIL:Response::RESULT_SUCCESS,
			$rsp_data['cause'],
			$rsp_data['error']?$rsp_data['message']:'success',
			['claim'=>$rsp_data]);
	}
}