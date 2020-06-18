<?php
/**
 * 产品信息
 */

namespace MercadoLibre\GlobalSelling\ItemInfo;
use MercadoLibre\Core\Response;
use MercadoLibre\GlobalSelling\GlobalSellingClient;

class ItemInfoClient extends GlobalSellingClient {
	
	protected $method = self::METHOD_GET;
	
	public function __construct(ItemInfoParameter $parameter) {
		parent::__construct('/items/'.$parameter->item_id,$parameter);
	}

	public function send() {
		$rsp_data = parent::send();
		return new ItemInfoResponse(
			$rsp_data['error']?Response::RESULT_FAIL:Response::RESULT_SUCCESS,
			$rsp_data['cause'],
			$rsp_data['error']?$rsp_data['message']:'success',
			['item'=>$rsp_data]);
	}
}