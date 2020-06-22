<?php

namespace MercadoLibre\GlobalSelling\QuestionsSearchGet;

use MercadoLibre\Core\Response;
use MercadoLibre\GlobalSelling\GlobalSellingClient;

class QuestionsSearchGetClient extends GlobalSellingClient {
	
	protected $method = self::METHOD_GET;
	
	public function __construct(QuestionsSearchGetParameter $parameter) {
		$param = [
			'offset'       => $parameter->offset,
			'limit'        => $parameter->limit,
			'seller_id'    => $parameter->seller_id,
			'status'       => $parameter->status,
		];
		parent::__construct('/marketplace/questions/search?'.http_build_query($param),$parameter);
	}

	public function send() {
		$rsp_data = parent::send();
		return new QuestionsSearchGetResponse(
			$rsp_data['error']?Response::RESULT_FAIL:Response::RESULT_SUCCESS,
			$rsp_data['cause'],
			$rsp_data['error']?$rsp_data['message']:'success',
			$rsp_data);
	}
}