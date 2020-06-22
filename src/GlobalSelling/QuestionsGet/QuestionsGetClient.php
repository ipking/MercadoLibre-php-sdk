<?php


namespace MercadoLibre\GlobalSelling\QuestionsGet;
use MercadoLibre\Core\Response;
use MercadoLibre\GlobalSelling\GlobalSellingClient;

class QuestionsGetClient extends GlobalSellingClient {
	
	protected $method = self::METHOD_GET;
	
	public function __construct(QuestionsGetParameter $parameter) {
		
		parent::__construct('/marketplace/questions/'.$parameter->question_id,$parameter);
	}

	public function send() {
		//校验数据
		$this->param->validateAll();
		$arr_data = $this->param->getDataAsArray($this->param->getDefines());
		unset($arr_data['question_id']);
		$rsp_data = parent::sendData($arr_data);
		return new QuestionsGetResponse(
			$rsp_data['error']?Response::RESULT_FAIL:Response::RESULT_SUCCESS,
			$rsp_data['cause'],
			$rsp_data['error']?$rsp_data['message']:'success',
			['question'=>$rsp_data]);
	}
}