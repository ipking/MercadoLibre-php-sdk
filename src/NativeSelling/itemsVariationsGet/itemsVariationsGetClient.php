<?php
/**
 * 产品变体
 */

namespace MercadoLibre\NativeSelling\itemsVariationsGet;
use MercadoLibre\Core\Response;
use MercadoLibre\NativeSelling\NativeSellingClient;

class itemsVariationsGetClient extends NativeSellingClient {
	
	protected $method = self::METHOD_GET;
	
	public function __construct(itemsVariationsGetParameter $parameter) {
		parent::__construct('/items/'.$parameter->item_id.'/variations/'.$parameter->variation_id,$parameter);
	}

	public function send() {
		$rsp_data = parent::send();
		return new itemsVariationsGetResponse(
			$rsp_data['error']?Response::RESULT_FAIL:Response::RESULT_SUCCESS,
			$rsp_data['cause'],
			$rsp_data['error']?$rsp_data['message']:'success',
			['variation'=>$rsp_data]);
	}
}