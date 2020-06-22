<?php
/**
 * 产品描述
 */

namespace MercadoLibre\NativeSelling\ItemsVariationsDelete;
use MercadoLibre\Core\Response;
use MercadoLibre\Base\BaseClient;

class ItemsVariationsDeleteClient extends BaseClient {
	
	protected $method = self::METHOD_DELETE;
	
	public function __construct(ItemsVariationsDeleteParameter $parameter) {
		parent::__construct('/items/'.$parameter->item_id.'/variations/'.$parameter->variations_id,$parameter);
	}
	
	
	public function send() {
		$rsp_data = parent::send();
		return new ItemsVariationsDeleteResponse(
			$rsp_data['error']?Response::RESULT_FAIL:Response::RESULT_SUCCESS,
			$rsp_data['cause'],
			$rsp_data['error']?$rsp_data['message']:'success',
			$rsp_data);
	}
}