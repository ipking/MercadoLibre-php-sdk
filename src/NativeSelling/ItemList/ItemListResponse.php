<?php
/**
 * 产品列表的响应
 */

namespace MercadoLibre\NativeSelling\ItemList;
use MercadoLibre\NativeSelling\Model\Paging;
use MercadoLibre\NativeSelling\NativeSellingErrorMsg;
use MercadoLibre\NativeSelling\NativeSellingResponse;

/**
 * @property array item_ids
 * @property Paging paging
 */
class ItemListResponse extends NativeSellingResponse{
	public function __construct($result,$errors, $message = 'success', $data = []) {
		$msg = NativeSellingErrorMsg::getMsg($errors);
		$msg and $message = $msg;
		parent::__construct($result,$errors, $message, $data, array(
			'item_ids' => [self::PARAM_TYPE_ARRAY, self::PARAM_OPTIONAL, self::PARAM_TYPE_STRING],
			'paging'   => [self::PARAM_TYPE_OBJECT, self::PARAM_OPTIONAL, Paging::class],
		));
	}
}
