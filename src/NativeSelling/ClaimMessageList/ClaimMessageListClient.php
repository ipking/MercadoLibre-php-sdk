<?php


namespace MercadoLibre\NativeSelling\ClaimMessageList;
use MercadoLibre\Core\Response;
use MercadoLibre\NativeSelling\NativeSellingClient;

class ClaimMessageListClient extends NativeSellingClient {
	
	protected $method = self::METHOD_GET;
	
	public function __construct(ClaimMessageListParameter $parameter) {
		
		parent::__construct('/v1/claims/'.$parameter->claim_id.'/messages',$parameter);
	}

	public function send() {
		$rsp_data = parent::send();
	
		return new ClaimMessageListResponse(
			$rsp_data['error']?Response::RESULT_FAIL:Response::RESULT_SUCCESS,
			$rsp_data['cause'],
			$rsp_data['error']?$rsp_data['message']:'success',
			['messages'=>$rsp_data]);
	}
}