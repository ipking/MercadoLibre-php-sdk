<?php
/**
 * 产品列表的响应
 */

namespace MercadoLibre\Native\ItemList;
use MercadoLibre\Native\NativeErrorMsg;
use MercadoLibre\Native\NativeResponse;

/**
 * @property array item_ids
 */
class ItemListResponse extends NativeResponse{
	public function __construct($result,$errors, $message = 'success', $data = []) {
		$msg = NativeErrorMsg::getMsg($errors);
		$msg and $message = $msg;
		parent::__construct($result,$errors, $message, $data, array(
			'item_ids'   => [self::PARAM_TYPE_ARRAY, self::PARAM_OPTIONAL,self::PARAM_TYPE_STRING],
		));
	}
}
