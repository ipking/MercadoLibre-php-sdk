<?php

namespace MercadoLibre\NativeSelling\UsersApplicationsDelete;
use MercadoLibre\Core\Response;
use MercadoLibre\Base\BaseClient;

class UsersApplicationsDeleteClient extends BaseClient {
	
	protected $method = self::METHOD_DELETE;
	
	public function __construct(UsersApplicationsDeleteParameter $parameter) {
		parent::__construct('/users/'.$parameter->seller_id.'/applications/'.$parameter->app_id,$parameter);
	}

	public function send() {
		//校验数据
		$this->param->validateAll();
		$arr_data = $this->param->getDataAsArray($this->param->getDefines());
		unset($arr_data['app_id']);
		unset($arr_data['seller_id']);
		$rsp_data = parent::sendData($arr_data);
		return new UsersApplicationsDeleteResponse(
			$rsp_data['error']?Response::RESULT_FAIL:Response::RESULT_SUCCESS,
			$rsp_data['cause'],
			$rsp_data['error']?$rsp_data['message']:'success',
			$rsp_data);
	}
}