<?php


namespace MercadoLibre\Native\ClaimEvidenceList;
use MercadoLibre\Core\Response;
use MercadoLibre\Native\NativeClient;

class ClaimEvidenceListClient extends NativeClient {
	
	protected $method = self::METHOD_GET;
	
	public function __construct(ClaimEvidenceListParameter $parameter) {
		
		parent::__construct('/v1/claims/'.$parameter->claim_id.'/evidences',$parameter);
	}

	public function send() {
		$rsp_data = parent::send();
	
		return new ClaimEvidenceListResponse(
			$rsp_data['error']?Response::RESULT_FAIL:Response::RESULT_SUCCESS,
			$rsp_data['cause'],
			$rsp_data['error']?$rsp_data['message']:'success',
			['evidences'=>$rsp_data]);
	}
}