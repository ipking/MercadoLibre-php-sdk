<?php


namespace MercadoLibre\Native\ClaimEvidence;
use MercadoLibre\Core\Response;
use MercadoLibre\Native\NativeClient;

class ClaimEvidenceClient extends NativeClient {
	
	protected $method = self::METHOD_POST;
	
	public function __construct(ClaimEvidenceParameter $parameter) {
		
		parent::__construct('/v1/claims/'.$parameter->claim_id.'/evidences',$parameter);
	}

	public function send() {
		//校验数据
		$this->param->validateAll();
		$arr_data = $this->param->getDataAsArray($this->param->getDefines());
		unset($arr_data['claim_id']);
		$rsp_data = parent::sendData($arr_data);
	
		return new ClaimEvidenceResponse(
			$rsp_data['error']?Response::RESULT_FAIL:Response::RESULT_SUCCESS,
			$rsp_data['cause'],
			$rsp_data['error']?$rsp_data['message']:'success',
			['evidences'=>$rsp_data]);
	}
}