<?php


namespace MercadoLibre\GlobalSelling\MarketplaceClaimsExpectedResolutionsGet;
use MercadoLibre\Core\Response;
use MercadoLibre\Base\BaseClient;

class MarketplaceClaimsExpectedResolutionsGetClient extends BaseClient {
	
	protected $method = self::METHOD_GET;
	
	public function __construct(MarketplaceClaimsExpectedResolutionsGetParameter $parameter) {
		
		parent::__construct('/marketplace/claims/'.$parameter->claim_id.'/expected_resolutions',$parameter);
	}

	public function send() {
		$rsp_data = parent::send();
	
		return new MarketplaceClaimsExpectedResolutionsGetResponse(
			$rsp_data['error']?Response::RESULT_FAIL:Response::RESULT_SUCCESS,
			$rsp_data['cause'],
			$rsp_data['error']?$rsp_data['message']:'success',
			['expected_resolutions'=>$rsp_data]);
	}
}