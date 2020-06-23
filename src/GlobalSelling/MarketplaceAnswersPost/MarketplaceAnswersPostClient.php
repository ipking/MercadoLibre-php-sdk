<?php


namespace MercadoLibre\GlobalSelling\MarketplaceAnswersPost;
use MercadoLibre\Core\Response;
use MercadoLibre\Base\BaseClient;

class MarketplaceAnswersPostClient extends BaseClient {
	
	protected $method = self::METHOD_POST;
	
	public function __construct(MarketplaceAnswersPostParameter $parameter) {
		parent::__construct('/marketplace/answers',$parameter);
	}

	public function send() {
		$rsp_data = parent::send();
		return new MarketplaceAnswersPostResponse(
			$rsp_data['error']?Response::RESULT_FAIL:Response::RESULT_SUCCESS,
			$rsp_data['cause'],
			$rsp_data['error']?$rsp_data['message']:'success',
			['question' =>$rsp_data]);
	}
}