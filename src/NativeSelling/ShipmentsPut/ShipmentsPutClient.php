<?php


namespace MercadoLibre\NativeSelling\ShipmentsPut;

use MercadoLibre\Core\Response;
use MercadoLibre\Base\BaseClient;

class ShipmentsPutClient extends BaseClient {
	
	protected $method = self::METHOD_PUT;
	
	public function __construct(ShipmentsPutParameter $parameter) {
		parent::__construct('/shipments/'.$parameter->shipment_id,$parameter);
	}
	
	
	public function send() {
		//校验数据
		$this->param->validateAll();
		$arr_data = $this->param->getDataAsArray($this->param->getDefines());
		unset($arr_data['shipment_id']);
		$rsp_data = parent::sendData($arr_data);
		return new ShipmentsPutResponse(
			$rsp_data['error']?Response::RESULT_FAIL:Response::RESULT_SUCCESS,
			$rsp_data['cause'],
			$rsp_data['error']?$rsp_data['message']:'success',
			$rsp_data);
	}
}