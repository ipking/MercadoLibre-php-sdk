<?php
namespace MercadoLibre\GlobalSelling\ItemsPut;

use MercadoLibre\GlobalSelling\ItemsPost\Model\Item;
use MercadoLibre\GlobalSelling\GlobalSellingErrorMsg;
use MercadoLibre\GlobalSelling\GlobalSellingResponse;

/**
 * @property Item item
 */
class ItemsPutResponse extends GlobalSellingResponse{
	public function __construct($result,$errors, $message = 'success', $data = []) {
		$msg = GlobalSellingErrorMsg::getMsg($errors);
		$msg and $message = $msg;
		parent::__construct($result,$errors, $message, $data, array(
			'item' => [self::PARAM_TYPE_OBJECT, self::PARAM_OPTIONAL, Item::class],
		));
	}
}
