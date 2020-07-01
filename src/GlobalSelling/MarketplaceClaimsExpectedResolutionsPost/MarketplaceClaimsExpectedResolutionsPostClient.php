<?php


namespace MercadoLibre\GlobalSelling\MarketplaceClaimsExpectedResolutionsPost;
use MercadoLibre\Core\Response;
use MercadoLibre\Base\BaseClient;

class MarketplaceClaimsExpectedResolutionsPostClient extends BaseClient {
	
	protected $method = self::METHOD_POST;
	
	public function __construct(MarketplaceClaimsExpectedResolutionsPostParameter $parameter) {
		
		parent::__construct('/marketplace/claims/'.$parameter->claim_id.'/expected_resolutions',$parameter);
	}

	public function send() {
		$param = $this->getParam();
		/**
		 * @var MarketplaceClaimsExpectedResolutionsPostParameter $param
		 */
		$data = [
			'expected_resolution'=>$param->expected_resolution
		];
		$rsp_data = parent::sendData($data);
	
		return new MarketplaceClaimsExpectedResolutionsPostResponse(
			$rsp_data['error']?Response::RESULT_FAIL:Response::RESULT_SUCCESS,
			$rsp_data['cause'],
			$rsp_data['error']?$rsp_data['message']:'success',
			['expected_resolutions'=>$rsp_data]);
	}
}