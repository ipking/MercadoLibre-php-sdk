<?php
/**
 * 产品变体
 */

namespace MercadoLibre\Native\Variations;
use MercadoLibre\Core\Response;
use MercadoLibre\Native\NativeClient;

class VariationsClient extends NativeClient {
	
	protected $method = self::METHOD_GET;
	
	public function __construct(VariationsParameter $parameter) {
		parent::__construct('/items/'.$parameter->item_id.'/variations/'.$parameter->variation_id,$parameter);
	}

	public function send() {
		$rsp_data = parent::send();
		return new VariationsResponse(
			$rsp_data['error']?Response::RESULT_FAIL:Response::RESULT_SUCCESS,
			$rsp_data['cause'],
			$rsp_data['error']?$rsp_data['message']:'success',
			['variation'=>$rsp_data]);
	}
}