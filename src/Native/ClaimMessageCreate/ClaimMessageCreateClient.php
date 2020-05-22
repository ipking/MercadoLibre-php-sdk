<?php


namespace MercadoLibre\Native\ClaimMessageCreate;
use MercadoLibre\Core\Response;
use MercadoLibre\Native\NativeClient;

class ClaimMessageCreateClient extends NativeClient {
	
	protected $method = self::METHOD_POST;
	protected $post_data = [];
	
	public function __construct(ClaimMessageCreateParameter $parameter) {
		parent::__construct('/v1/claims/'.$parameter->claim_id.'/messages',$parameter);
	}
	
	public function setPostData($post_data) {
		$this->post_data = $post_data;
	}
	
	public function send() {
		$rsp_data = parent::sendData($this->post_data);
		
		return new ClaimMessageCreateResponse(
			$rsp_data['error']?Response::RESULT_FAIL:Response::RESULT_SUCCESS,
			$rsp_data['cause'],
			$rsp_data['error']?$rsp_data['message']:'success',
			$rsp_data);
	}
}