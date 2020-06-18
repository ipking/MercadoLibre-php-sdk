<?php

namespace MercadoLibre\GlobalSelling\UsersGet;

use MercadoLibre\Core\Response;
use MercadoLibre\NativeSelling\NativeSellingClient;

class UsersGetClient extends NativeSellingClient {
	
	protected $method = self::METHOD_GET;
	
	public function __construct(UsersGetParameter $parameter) {
		parent::__construct('/marketplace/users/'.$parameter->user_id,$parameter);
	}
	

	public function send() {
		//校验数据
		$this->param->validateAll();
		$arr_data = $this->param->getDataAsArray($this->param->getDefines());
		unset($arr_data['user_id']);
		$rsp_data = parent::sendData($arr_data);
		return new UsersGetResponse(
			$rsp_data['error']?Response::RESULT_FAIL:Response::RESULT_SUCCESS,
			$rsp_data['cause'],
			$rsp_data['error']?$rsp_data['message']:'success',
			$rsp_data);
	}
}