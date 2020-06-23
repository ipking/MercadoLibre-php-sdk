<?php

namespace MercadoLibre\GlobalSelling\MarketplaceQuestionsSearchGet;

use MercadoLibre\Core\Response;
use MercadoLibre\Base\BaseClient;

class MarketplaceQuestionsSearchGetClient extends BaseClient {
	
	protected $method = self::METHOD_GET;
	
	public function __construct(MarketplaceQuestionsSearchGetParameter $parameter) {
		$param = [
			'offset'       => $parameter->offset,
			'limit'        => $parameter->limit,
			'seller_id'    => $parameter->seller_id,
			'status'       => $parameter->status,
		];
		parent::__construct('/marketplace/questions/search?'.http_build_query($param),$parameter);
	}

	public function send() {
		//校验数据
		$this->param->validateAll();
		$arr_data = $this->param->getDataAsArray($this->param->getDefines());
		unset($arr_data['offset']);
		unset($arr_data['limit']);
		unset($arr_data['seller_id']);
		unset($arr_data['status']);
		$rsp_data = parent::sendData($arr_data);
		return new MarketplaceQuestionsSearchGetResponse(
			$rsp_data['error']?Response::RESULT_FAIL:Response::RESULT_SUCCESS,
			$rsp_data['cause'],
			$rsp_data['error']?$rsp_data['message']:'success',
			$rsp_data);
	}
}