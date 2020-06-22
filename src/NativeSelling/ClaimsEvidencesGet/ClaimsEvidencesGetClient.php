<?php


namespace MercadoLibre\NativeSelling\ClaimsEvidencesGet;
use MercadoLibre\Core\Response;
use MercadoLibre\Base\BaseClient;

class ClaimsEvidencesGetClient extends BaseClient {
	
	protected $method = self::METHOD_GET;
	
	public function __construct(ClaimsEvidencesGetParameter $parameter) {
		
		parent::__construct('/v1/claims/'.$parameter->claim_id.'/evidences',$parameter);
	}

	public function send() {
		$rsp_data = parent::send();
	
		return new ClaimsEvidencesGetResponse(
			$rsp_data['error']?Response::RESULT_FAIL:Response::RESULT_SUCCESS,
			$rsp_data['cause'],
			$rsp_data['error']?$rsp_data['message']:'success',
			['evidences'=>$rsp_data]);
	}
}