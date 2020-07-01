<?php


namespace MercadoLibre\GlobalSelling\MarketplaceMessagesPacksGet;
use MercadoLibre\Core\Response;
use MercadoLibre\Base\BaseClient;

class MarketplaceMessagesPacksGetClient extends BaseClient {
	
	protected $method = self::METHOD_GET;
	
	public function __construct(MarketplaceMessagesPacksGetParameter $parameter) {
		
		parent::__construct('/marketplace/messages/packs/'.$parameter->pack_id,$parameter);
	}

	public function send() {
		$rsp_data = parent::send();
		
		return new MarketplaceMessagesPacksGetResponse(
			$rsp_data['error']?Response::RESULT_FAIL:Response::RESULT_SUCCESS,
			$rsp_data['cause'],
			$rsp_data['error']?$rsp_data['message']:'success',
			$rsp_data);
	}
}