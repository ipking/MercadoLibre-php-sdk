<?php
/**
 * 账号信息
 */

namespace MercadoLibre\Native\UserInfo;
use MercadoLibre\Core\Response;
use MercadoLibre\Native\NativeClient;

class UserInfoClient extends NativeClient {
	
	protected $method = self::METHOD_GET;
	
	public function __construct(UserInfoParameter $parameter) {
		parent::__construct('/users/'.$parameter->user_id,$parameter);
	}

	public function send() {
		$rsp_data = parent::send();
		return new UserInfoResponse(
			$rsp_data['error']?Response::RESULT_FAIL:Response::RESULT_SUCCESS,
			$rsp_data['cause'],
			$rsp_data['error']?$rsp_data['message']:'success',
			$rsp_data);
	}
}