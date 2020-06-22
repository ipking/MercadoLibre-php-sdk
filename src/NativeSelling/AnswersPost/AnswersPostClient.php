<?php


namespace MercadoLibre\NativeSelling\AnswersPost;
use MercadoLibre\Core\Response;
use MercadoLibre\Base\BaseClient;

class AnswersPostClient extends BaseClient {
	
	protected $method = self::METHOD_POST;
	
	public function __construct(AnswersPostParameter $parameter) {
		parent::__construct('/answers',$parameter);
	}

	public function send() {
		$rsp_data = parent::send();
		return new AnswersPostResponse(
			$rsp_data['error']?Response::RESULT_FAIL:Response::RESULT_SUCCESS,
			$rsp_data['cause'],
			$rsp_data['error']?$rsp_data['message']:'success',
			['question' =>$rsp_data]);
	}
}