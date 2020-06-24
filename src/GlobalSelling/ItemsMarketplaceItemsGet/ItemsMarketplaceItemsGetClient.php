<?php
/**
 * 产品信息
 */

namespace MercadoLibre\GlobalSelling\ItemsMarketplaceItemsGet;
use MercadoLibre\Core\Response;
use MercadoLibre\Base\BaseClient;

class ItemsMarketplaceItemsGetClient extends BaseClient {
	
	protected $method = self::METHOD_GET;
	
	public function __construct(ItemsMarketplaceItemsGetParameter $parameter) {
		parent::__construct('/items/'.$parameter->item_id.'/marketplace_items',$parameter);
	}

	public function send() {
		//校验数据
		$this->param->validateAll();
		$arr_data = $this->param->getDataAsArray($this->param->getDefines());
		unset($arr_data['item_id']);
		$rsp_data = parent::sendData($arr_data);
		return new ItemsMarketplaceItemsGetResponse(
			$rsp_data['error']?Response::RESULT_FAIL:Response::RESULT_SUCCESS,
			$rsp_data['cause'],
			$rsp_data['error']?$rsp_data['message']:'success',
			$rsp_data);
	}
}