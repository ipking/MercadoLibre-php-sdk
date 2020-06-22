<?php
/**
 * 账号信息
 */

namespace MercadoLibre\NativeSelling\UsersGet;
use MercadoLibre\Core\Response;
use MercadoLibre\Base\BaseClient;

class UsersGetClient extends BaseClient {
	
	protected $method = self::METHOD_GET;
	
	public function __construct(UsersGetParameter $parameter) {
		parent::__construct('/users/'.$parameter->seller_id,$parameter);
	}

	public function send() {
		$rsp_data = parent::send();
		return new UsersGetResponse(
			$rsp_data['error']?Response::RESULT_FAIL:Response::RESULT_SUCCESS,
			$rsp_data['cause'],
			$rsp_data['error']?$rsp_data['message']:'success',
			$rsp_data);
	}
}