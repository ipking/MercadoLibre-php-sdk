<?php
/**
 * 产品信息
 */

namespace MercadoLibre\GlobalSelling\ItemsGet;
use MercadoLibre\Core\Response;
use MercadoLibre\Base\BaseClient;

class ItemsGetClient extends BaseClient {
	
	protected $method = self::METHOD_GET;
	
	public function __construct(ItemsGetParameter $parameter) {
		parent::__construct('/marketplace/items/'.$parameter->item_id,$parameter);
	}

	public function send() {
		//校验数据
		$this->param->validateAll();
		$arr_data = $this->param->getDataAsArray($this->param->getDefines());
		unset($arr_data['item_id']);
		$rsp_data = parent::sendData($arr_data);
		return new ItemsGetResponse(
			$rsp_data['error']?Response::RESULT_FAIL:Response::RESULT_SUCCESS,
			$rsp_data['cause'],
			$rsp_data['error']?$rsp_data['message']:'success',
			['item'=>$rsp_data]);
	}
}