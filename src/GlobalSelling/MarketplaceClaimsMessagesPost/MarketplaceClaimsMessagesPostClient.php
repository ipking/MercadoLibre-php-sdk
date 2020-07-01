<?php


namespace MercadoLibre\GlobalSelling\MarketplaceClaimsMessagesPost;
use MercadoLibre\Core\Response;
use MercadoLibre\Base\BaseClient;

class MarketplaceClaimsMessagesPostClient extends BaseClient {
	
	protected $method = self::METHOD_POST;
	
	public function __construct(MarketplaceClaimsMessagesPostParameter $parameter) {
		parent::__construct('/marketplace/claims/'.$parameter->claim_id.'/messages',$parameter);
	}
	
	public function send() {
		//校验数据
		$this->param->validateAll();
		$arr_data = $this->param->getDataAsArray($this->param->getDefines());
		unset($arr_data['claim_id']);
		$rsp_data = parent::sendData($arr_data);
		
		return new MarketplaceClaimsMessagesPostResponse(
			$rsp_data['error']?Response::RESULT_FAIL:Response::RESULT_SUCCESS,
			$rsp_data['cause'],
			$rsp_data['error']?$rsp_data['message']:'success',
			$rsp_data);
	}
}