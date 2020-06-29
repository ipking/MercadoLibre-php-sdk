<?php
/**
 * 产品变体
 */

namespace MercadoLibre\NativeSelling\ItemsVariationsGet;
use MercadoLibre\Core\Response;
use MercadoLibre\Base\BaseClient;

class ItemsVariationsGetClient extends BaseClient {
	
	protected $method = self::METHOD_GET;
	
	public function __construct(ItemsVariationsGetParameter $parameter) {
		parent::__construct('/items/'.$parameter->item_id.'/variations/'.$parameter->variation_id,$parameter);
	}

	public function send() {
		$rsp_data = parent::send();
		return new ItemsVariationsGetResponse(
			$rsp_data['error']?Response::RESULT_FAIL:Response::RESULT_SUCCESS,
			$rsp_data['cause'],
			$rsp_data['error']?$rsp_data['message']:'success',
			['variation'=>$rsp_data]);
	}
}