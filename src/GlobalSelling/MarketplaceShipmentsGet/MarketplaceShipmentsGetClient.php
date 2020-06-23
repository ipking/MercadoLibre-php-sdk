<?php


namespace MercadoLibre\GlobalSelling\MarketplaceShipmentsGet;

use MercadoLibre\Core\Response;
use MercadoLibre\Base\BaseClient;

class MarketplaceShipmentsGetClient extends BaseClient {
	
	protected $method = self::METHOD_GET;
	
	public function __construct(MarketplaceShipmentsGetParameter $parameter) {
		parent::__construct('/marketplace/shipments/'.$parameter->shipment_id,$parameter);
	}
	
	
	public function send() {
		//校验数据
		$this->param->validateAll();
		$arr_data = $this->param->getDataAsArray($this->param->getDefines());
		unset($arr_data['shipment_id']);
		$rsp_data = parent::sendData($arr_data);
		return new MarketplaceShipmentsGetResponse(
			$rsp_data['error']?Response::RESULT_FAIL:Response::RESULT_SUCCESS,
			$rsp_data['cause'],
			$rsp_data['error']?$rsp_data['message']:'success',
			['shipment'=>$rsp_data]);
	}
}