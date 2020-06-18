<?php
/**
 * 产品描述
 */

namespace MercadoLibre\NativeSelling\ItemDescription;
use MercadoLibre\Core\Response;
use MercadoLibre\NativeSelling\NativeSellingClient;

class ItemDescriptionClient extends NativeSellingClient {
	
	protected $method = self::METHOD_GET;
	
	public function __construct(ItemDescriptionParameter $parameter) {
		parent::__construct('/items/'.$parameter->item_id.'/description',$parameter);
	}

	public function send() {
		$rsp_data = parent::send();
		return new ItemDescriptionResponse(
			$rsp_data['error']?Response::RESULT_FAIL:Response::RESULT_SUCCESS,
			$rsp_data['cause'],
			$rsp_data['error']?$rsp_data['message']:'success',
			$rsp_data);
	}
}