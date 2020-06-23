<?php
namespace MercadoLibre\GlobalSelling\MarketplaceItemsPut;

use MercadoLibre\GlobalSelling\MarketplaceItemsPost\Model\Item;
use MercadoLibre\Base\BaseErrorMsg;
use MercadoLibre\Base\BaseResponse;

/**
 * @property Item item
 */
class MarketplaceItemsPutResponse extends BaseResponse{
	public function __construct($result,$errors, $message = 'success', $data = []) {
		$msg = BaseErrorMsg::getMsg($errors);
		$msg and $message = $msg;
		parent::__construct($result,$errors, $message, $data, array(
			'item' => [self::PARAM_TYPE_OBJECT, self::PARAM_OPTIONAL, Item::class],
		));
	}
}
