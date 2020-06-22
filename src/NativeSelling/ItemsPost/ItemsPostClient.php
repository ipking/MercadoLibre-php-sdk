<?php
/**
 * 创建产品
 */

namespace MercadoLibre\NativeSelling\ItemsPost;
use MercadoLibre\Core\Response;
use MercadoLibre\Base\BaseClient;

class ItemsPostClient extends BaseClient {
	
	protected $method = self::METHOD_POST;
	
	public function __construct(ItemsPostParameter $parameter) {
		parent::__construct('/items',$parameter);
	}

	public function send() {
		$rsp_data = parent::send();
		return new ItemsPostResponse(
			$rsp_data['error']?Response::RESULT_FAIL:Response::RESULT_SUCCESS,
			$rsp_data['cause'],
			$rsp_data['error']?$rsp_data['message']:'success',
			['item' =>$rsp_data]);
	}
}