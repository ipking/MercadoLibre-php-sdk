<?php
/**
 * 产品描述
 */

namespace MercadoLibre\NativeSelling\ItemsDescriptionPut;
use MercadoLibre\Core\Response;
use MercadoLibre\NativeSelling\NativeSellingClient;

class ItemsDescriptionPutClient extends NativeSellingClient {
	
	protected $method = self::METHOD_PUT;
	
	public function __construct(ItemsDescriptionPutParameter $parameter) {
		parent::__construct('/items/'.$parameter->item_id.'/description',$parameter);
	}
	

	public function send() {
		//校验数据
		$this->param->validateAll();
		$arr_data = $this->param->getDataAsArray($this->param->getDefines());
		unset($arr_data['item_id']);
		$rsp_data = parent::sendData($arr_data);
		return new ItemsDescriptionPutResponse(
			$rsp_data['error']?Response::RESULT_FAIL:Response::RESULT_SUCCESS,
			$rsp_data['cause'],
			$rsp_data['error']?$rsp_data['message']:'success',
			$rsp_data);
	}
}