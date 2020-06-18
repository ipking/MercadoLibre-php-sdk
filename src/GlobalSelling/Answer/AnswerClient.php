<?php


namespace MercadoLibre\GlobalSelling\Answer;
use MercadoLibre\Core\Response;
use MercadoLibre\GlobalSelling\GlobalSellingClient;

class AnswerClient extends GlobalSellingClient {
	
	protected $method = self::METHOD_POST;
	
	public function __construct(AnswerParameter $parameter) {
		parent::__construct('/answers',$parameter);
	}

	public function send() {
		$rsp_data = parent::send();
		return new AnswerResponse(
			$rsp_data['error']?Response::RESULT_FAIL:Response::RESULT_SUCCESS,
			$rsp_data['cause'],
			$rsp_data['error']?$rsp_data['message']:'success',
			['question' =>$rsp_data]);
	}
}