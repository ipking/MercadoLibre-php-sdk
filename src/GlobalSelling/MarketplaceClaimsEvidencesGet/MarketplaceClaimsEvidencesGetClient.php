<?php


namespace MercadoLibre\GlobalSelling\MarketplaceClaimsEvidencesGet;
use MercadoLibre\Core\Response;
use MercadoLibre\Base\BaseClient;

class MarketplaceClaimsEvidencesGetClient extends BaseClient {
	
	protected $method = self::METHOD_GET;
	
	public function __construct(MarketplaceClaimsEvidencesGetParameter $parameter) {
		
		parent::__construct('/marketplace/claims/'.$parameter->claim_id.'/evidences',$parameter);
	}

	public function send() {
		$rsp_data = parent::send();
	
		return new MarketplaceClaimsEvidencesGetResponse(
			$rsp_data['error']?Response::RESULT_FAIL:Response::RESULT_SUCCESS,
			$rsp_data['cause'],
			$rsp_data['error']?$rsp_data['message']:'success',
			['evidences'=>$rsp_data]);
	}
}