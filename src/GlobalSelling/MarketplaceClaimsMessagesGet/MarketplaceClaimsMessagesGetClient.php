<?php


namespace MercadoLibre\GlobalSelling\MarketplaceClaimsMessagesGet;
use MercadoLibre\Core\Response;
use MercadoLibre\Base\BaseClient;

class MarketplaceClaimsMessagesGetClient extends BaseClient {
	
	protected $method = self::METHOD_GET;
	
	public function __construct(MarketplaceClaimsMessagesGetParameter $parameter) {
		
		parent::__construct('/marketplace/claims/'.$parameter->claim_id.'/messages',$parameter);
	}

	public function send() {
		$rsp_data = parent::send();
	
		return new MarketplaceClaimsMessagesGetResponse(
			$rsp_data['error']?Response::RESULT_FAIL:Response::RESULT_SUCCESS,
			$rsp_data['cause'],
			$rsp_data['error']?$rsp_data['message']:'success',
			['messages'=>$rsp_data]);
	}
}