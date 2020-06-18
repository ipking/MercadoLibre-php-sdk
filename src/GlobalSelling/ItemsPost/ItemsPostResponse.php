<?php
namespace MercadoLibre\GlobalSelling\ItemsPost;

use MercadoLibre\GlobalSelling\ItemsPost\Model\Item;
use MercadoLibre\NativeSelling\NativeSellingErrorMsg;
use MercadoLibre\NativeSelling\NativeSellingResponse;

/**
 * @property Item[] items
 */
class ItemsPostResponse extends NativeSellingResponse{
	public function __construct($result,$errors, $message = 'success', $data = []) {
		$msg = NativeSellingErrorMsg::getMsg($errors);
		$msg and $message = $msg;
		parent::__construct($result,$errors, $message, $data, array(
			'items' => [self::PARAM_TYPE_ARRAY, self::PARAM_OPTIONAL, Item::class],
		));
	}
}
