<?php


namespace MercadoLibre\NativeSelling\ClaimsExpectedResolutionsPost;
use MercadoLibre\Core\Response;
use MercadoLibre\Base\BaseClient;

class ClaimsExpectedResolutionsPostClient extends BaseClient {
	
	protected $method = self::METHOD_POST;
	
	public function __construct(ClaimsExpectedResolutionsPostParameter $parameter) {
		
		parent::__construct('/v1/claims/'.$parameter->claim_id.'/expected_resolutions',$parameter);
	}

	public function send() {
		$param = $this->getParam();
		/**
		 * @var ClaimsExpectedResolutionsPostParameter $param
		 */
		$data = [
			'expected_resolution'=>$param->expected_resolution
		];
		$rsp_data = parent::sendData($data);
	
		return new ClaimsExpectedResolutionsPostResponse(
			$rsp_data['error']?Response::RESULT_FAIL:Response::RESULT_SUCCESS,
			$rsp_data['cause'],
			$rsp_data['error']?$rsp_data['message']:'success',
			['expected_resolutions'=>$rsp_data]);
	}
}