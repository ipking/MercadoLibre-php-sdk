<?php


namespace MercadoLibre\NativeSelling\MessagesGet;
use MercadoLibre\Core\Response;
use MercadoLibre\NativeSelling\NativeSellingClient;

class MessagesGetClient extends NativeSellingClient {
	
	protected $method = self::METHOD_GET;
	protected $curl_option = array(
		CURLOPT_HTTPHEADER => array('X-Pack-Format: true'),
	);
	
	public function __construct(MessagesGetParameter $parameter) {
		
		parent::__construct('/messages/'.$parameter->message_id,$parameter);
	}

	public function send() {
		$rsp_data = parent::send();
		
		return new MessagesGetResponse(
			$rsp_data['error']?Response::RESULT_FAIL:Response::RESULT_SUCCESS,
			$rsp_data['cause'],
			$rsp_data['error']?$rsp_data['message']:'success',
			$rsp_data);
	}
}