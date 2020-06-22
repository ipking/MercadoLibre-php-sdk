<?php
namespace MercadoLibre\GlobalSelling\ItemsPost;

use MercadoLibre\GlobalSelling\ItemsPost\Model\Item;
use MercadoLibre\GlobalSelling\GlobalSellingErrorMsg;
use MercadoLibre\GlobalSelling\GlobalSellingResponse;

/**
 * @property Item[] items
 */
class ItemsPostResponse extends GlobalSellingResponse{
	public function __construct($result,$errors, $message = 'success', $data = []) {
		$msg = GlobalSellingErrorMsg::getMsg($errors);
		$msg and $message = $msg;
		parent::__construct($result,$errors, $message, $data, array(
			'items' => [self::PARAM_TYPE_ARRAY, self::PARAM_OPTIONAL, Item::class],
		));
	}
}
