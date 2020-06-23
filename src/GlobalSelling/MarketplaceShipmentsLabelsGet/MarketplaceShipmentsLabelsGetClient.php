<?php

namespace MercadoLibre\GlobalSelling\MarketplaceShipmentsLabelsGet;

use MercadoLibre\Core\Response;
use MercadoLibre\Base\BaseClient;

class MarketplaceShipmentsLabelsGetClient extends BaseClient {
	
	protected $method = self::METHOD_GET;
	
	public function __construct(MarketplaceShipmentsLabelsGetParameter $parameter) {
		parent::__construct('/marketplace/shipments/'.$parameter->shipment_id.'/labels',$parameter);
	}
	
	
	public function send() {
		//校验数据
		$this->param->validateAll();
		$arr_data = $this->param->getDataAsArray($this->param->getDefines());
		unset($arr_data['shipment_id']);
		$rsp_data = parent::sendData($arr_data);
		return new MarketplaceShipmentsLabelsGetResponse(
			$rsp_data['error']?Response::RESULT_FAIL:Response::RESULT_SUCCESS,
			$rsp_data['cause'],
			$rsp_data['error']?$rsp_data['message']:'success',
			['label'=>$rsp_data]);
	}
}