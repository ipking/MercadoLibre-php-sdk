<?php

namespace MercadoLibre\GlobalSelling\MarketplaceUsersGet;

use MercadoLibre\Core\Response;
use MercadoLibre\Base\BaseClient;

class MarketplaceUsersGetClient extends BaseClient {
	
	protected $method = self::METHOD_GET;
	
	public function __construct(MarketplaceUsersGetParameter $parameter) {
		parent::__construct('/marketplace/users/'.$parameter->user_id,$parameter);
	}
	

	public function send() {
		//校验数据
		$this->param->validateAll();
		$arr_data = $this->param->getDataAsArray($this->param->getDefines());
		unset($arr_data['user_id']);
		$rsp_data = parent::sendData($arr_data);
		return new MarketplaceUsersGetResponse(
			$rsp_data['error']?Response::RESULT_FAIL:Response::RESULT_SUCCESS,
			$rsp_data['cause'],
			$rsp_data['error']?$rsp_data['message']:'success',
			$rsp_data);
	}
}