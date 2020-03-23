<?php
/**
 * 产品描述
 */

namespace MercadoLibre\Native\UpdateDescription;
use MercadoLibre\Core\Response;
use MercadoLibre\Native\NativeClient;

class UpdateDescriptionClient extends NativeClient {
	
	protected $method = 'PUT';
	protected $put_data = [];
	
	public function __construct(UpdateDescriptionParameter $parameter) {
		parent::__construct('/items/'.$parameter->item_id.'/description',$parameter);
	}
	
	public function setPutData($put_data) {
		$this->put_data = $put_data;
	}

	public function send() {
		$rsp_data = parent::send();
		return new UpdateDescriptionResponse(
			$rsp_data['error']?Response::RESULT_FAIL:Response::RESULT_SUCCESS,
			$rsp_data['cause'],
			$rsp_data['error']?$rsp_data['message']:'success',
			$rsp_data);
	}
}