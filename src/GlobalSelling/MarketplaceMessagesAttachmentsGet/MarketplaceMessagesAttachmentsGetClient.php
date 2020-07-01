<?php


namespace MercadoLibre\GlobalSelling\MarketplaceMessagesAttachmentsGet;


use MercadoLibre\Core\Response;
use MercadoLibre\Base\BaseClient;

class MarketplaceMessagesAttachmentsGetClient extends BaseClient {
	
	protected $method = self::METHOD_GET;
	
	
	public function __construct(MarketplaceMessagesAttachmentsGetParameter $parameter) {
		parent::__construct('/marketplace/messages/attachments/'.$parameter->attachment_id,$parameter);
	}

	public function send() {
		$rsp_data = parent::send();
		
		return new MarketplaceMessagesAttachmentsGetResponse(
			$rsp_data['message']?Response::RESULT_FAIL:Response::RESULT_SUCCESS,
			$rsp_data['cause'],
			$rsp_data['message']?$rsp_data['message']:'success',
			$rsp_data);
	}
}