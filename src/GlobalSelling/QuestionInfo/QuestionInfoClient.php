<?php


namespace MercadoLibre\GlobalSelling\QuestionInfo;
use MercadoLibre\Core\Response;
use MercadoLibre\GlobalSelling\GlobalSellingClient;

class QuestionInfoClient extends GlobalSellingClient {
	
	protected $method = self::METHOD_GET;
	
	public function __construct(QuestionInfoParameter $parameter) {
		
		parent::__construct('/questions/'.$parameter->question_id,$parameter);
	}

	public function send() {
		$rsp_data = parent::send();
		$rsp_data['orders']=$rsp_data['results'];
		return new QuestionInfoResponse(
			$rsp_data['error']?Response::RESULT_FAIL:Response::RESULT_SUCCESS,
			$rsp_data['cause'],
			$rsp_data['error']?$rsp_data['message']:'success',
			['question'=>$rsp_data]);
	}
}