<?php


namespace MercadoLibre\NativeSelling\Shipments;

use MercadoLibre\Core\Response;
use MercadoLibre\NativeSelling\NativeSellingClient;

class ShipmentsClient extends NativeSellingClient {
	
	protected $method = self::METHOD_PUT;
	
	public function __construct(ShipmentsParameter $parameter) {
		parent::__construct('/shipments/'.$parameter->shipment_id,$parameter);
	}
	
	
	public function send() {
		//校验数据
		$this->param->validateAll();
		$arr_data = $this->param->getDataAsArray($this->param->getDefines());
		unset($arr_data['shipment_id']);
		$rsp_data = parent::sendData($arr_data);
		return new ShipmentsResponse(
			$rsp_data['error']?Response::RESULT_FAIL:Response::RESULT_SUCCESS,
			$rsp_data['cause'],
			$rsp_data['error']?$rsp_data['message']:'success',
			$rsp_data);
	}
}