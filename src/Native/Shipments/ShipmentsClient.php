<?php


namespace MercadoLibre\Native\Shipments;

use MercadoLibre\Core\Response;
use MercadoLibre\Native\NativeClient;

class ShipmentsClient extends NativeClient {
	
	protected $method = self::METHOD_PUT;
	protected $put_data = [];
	
	public function __construct(ShipmentsParameter $parameter) {
		parent::__construct('/shipments/'.$parameter->shipment_id,$parameter);
	}
	
	public function setPutData($put_data) {
		$this->put_data = $put_data;
	}

	public function send() {
		$rsp_data = parent::sendData($this->put_data);
		return new ShipmentsResponse(
			$rsp_data['error']?Response::RESULT_FAIL:Response::RESULT_SUCCESS,
			$rsp_data['cause'],
			$rsp_data['error']?$rsp_data['message']:'success',
			$rsp_data);
	}
}