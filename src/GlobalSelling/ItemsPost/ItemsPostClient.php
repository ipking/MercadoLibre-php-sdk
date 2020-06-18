<?php
/**
 * 获取用户能发布的站点
 */

namespace MercadoLibre\GlobalSelling\ItemsPost;
use MercadoLibre\Core\Response;
use MercadoLibre\NativeSelling\NativeSellingClient;

class ItemsPostClient extends NativeSellingClient {
	
	protected $method = self::METHOD_POST;
	
	public function __construct(ItemsPostParameter $parameter) {
		parent::__construct('/marketplace/items/'.$parameter->item_id,$parameter);
	}
	

	public function send() {
		//校验数据
		$this->param->validateAll();
		$arr_data = $this->param->getDataAsArray($this->param->getDefines());
		unset($arr_data['item_id']);
		$rsp_data = parent::sendData($arr_data);
		return new ItemsPostResponse(
			$rsp_data['error']?Response::RESULT_FAIL:Response::RESULT_SUCCESS,
			$rsp_data['cause'],
			$rsp_data['error']?$rsp_data['message']:'success',
			$rsp_data);
	}
}