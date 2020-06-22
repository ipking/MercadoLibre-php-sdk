<?php
namespace MercadoLibre\GlobalSelling\ItemsPost;

use MercadoLibre\GlobalSelling\ItemsPost\Model\Item;
use MercadoLibre\Base\BaseErrorMsg;
use MercadoLibre\Base\BaseResponse;

/**
 * @property Item[] items
 */
class ItemsPostResponse extends BaseResponse{
	public function __construct($result,$errors, $message = 'success', $data = []) {
		$msg = BaseErrorMsg::getMsg($errors);
		$msg and $message = $msg;
		parent::__construct($result,$errors, $message, $data, array(
			'items' => [self::PARAM_TYPE_ARRAY, self::PARAM_OPTIONAL, Item::class],
		));
	}
}
