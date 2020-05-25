<?php
/**
 * 产品描述
 */

namespace MercadoLibre\Native\ItemUpdateDescription;
use MercadoLibre\Core\Response;
use MercadoLibre\Native\NativeClient;

class ItemUpdateDescriptionClient extends NativeClient {
	
	protected $method = self::METHOD_PUT;
	protected $put_data = [];
	
	public function __construct(ItemUpdateDescriptionParameter $parameter) {
		parent::__construct('/items/'.$parameter->item_id.'/description',$parameter);
	}
	
	public function setPutData($put_data) {
		$this->put_data = $put_data;
	}

	public function send() {
		$rsp_data = parent::sendData($this->put_data);
		return new ItemUpdateDescriptionResponse(
			$rsp_data['error']?Response::RESULT_FAIL:Response::RESULT_SUCCESS,
			$rsp_data['cause'],
			$rsp_data['error']?$rsp_data['message']:'success',
			$rsp_data);
	}
}