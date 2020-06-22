<?php
/**
 * 产品描述
 */

namespace MercadoLibre\NativeSelling\ItemsDescriptionGet;
use MercadoLibre\Core\Response;
use MercadoLibre\Base\BaseClient;

class ItemsDescriptionGetClient extends BaseClient {
	
	protected $method = self::METHOD_GET;
	
	public function __construct(ItemsDescriptionGetParameter $parameter) {
		parent::__construct('/items/'.$parameter->item_id.'/description',$parameter);
	}

	public function send() {
		$rsp_data = parent::send();
		return new ItemsDescriptionGetResponse(
			$rsp_data['error']?Response::RESULT_FAIL:Response::RESULT_SUCCESS,
			$rsp_data['cause'],
			$rsp_data['error']?$rsp_data['message']:'success',
			$rsp_data);
	}
}