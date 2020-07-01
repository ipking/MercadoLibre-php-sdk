<?php


namespace MercadoLibre\GlobalSelling\MarketplaceClaimsAttachmentsGet;


use MercadoLibre\Core\Response;
use MercadoLibre\Base\BaseClient;

class MarketplaceClaimsAttachmentsGetClient extends BaseClient {
	
	protected $method = self::METHOD_GET;
	
	
	public function __construct(MarketplaceClaimsAttachmentsGetParameter $parameter) {
		parent::__construct('/marketplace/claims/'.$parameter->claim_id.'/attachments/'.$parameter->attach_id,$parameter);
	}

	public function send() {
		$rsp_data = parent::send();
		
		return new MarketplaceClaimsAttachmentsGetResponse(
			$rsp_data['message']?Response::RESULT_FAIL:Response::RESULT_SUCCESS,
			$rsp_data['cause'],
			$rsp_data['message']?$rsp_data['message']:'success',
			$rsp_data);
	}
}