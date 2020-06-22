<?php
/**
 * 更新产品
 */

namespace MercadoLibre\NativeSelling\ItemsPut;
use MercadoLibre\Core\Response;
use MercadoLibre\NativeSelling\NativeSellingClient;

class ItemsPutClient extends NativeSellingClient {
	
	protected $method = self::METHOD_PUT;
	protected $put_data = [];
	
	public function __construct(ItemsPutParameter $parameter) {
		parent::__construct('/items/'.$parameter->item_id,$parameter);
	}

	public function setPutData($put_data) {
		$this->put_data = $put_data;
	}
	
	public function send() {
		$rsp_data = parent::sendData($this->put_data);
		return new ItemsPutResponse(
			$rsp_data['error']?Response::RESULT_FAIL:Response::RESULT_SUCCESS,
			$rsp_data['cause'],
			$rsp_data['error']?$rsp_data['message']:'success',
			['item'=>$rsp_data]);
	}
}