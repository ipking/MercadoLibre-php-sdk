<?php


namespace MercadoLibre\GlobalSelling\MarketplaceMessagesPost;
use MercadoLibre\Core\Response;
use MercadoLibre\Base\BaseClient;

class MarketplaceMessagesPostClient extends BaseClient {
	
	protected $method = self::METHOD_POST;
	
	public function __construct(MarketplaceMessagesPostParameter $parameter) {
		
		parent::__construct('/marketplace/messages/packs/'.$parameter->pack_id,$parameter);
	}
	
	
	
	public function send() {
		//校验数据
		$this->param->validateAll();
		$arr_data = $this->param->getDataAsArray($this->param->getDefines());
		unset($arr_data['pack_id']);
		$rsp_data = parent::sendData($arr_data);
		
		return new MarketplaceMessagesPostResponse(
			$rsp_data['error']?Response::RESULT_FAIL:Response::RESULT_SUCCESS,
			$rsp_data['cause'],
			$rsp_data['error']?$rsp_data['message']:'success',
			$rsp_data);
	}
}