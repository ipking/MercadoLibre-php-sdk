<?php
/**
 * 更新产品的响应
 */

namespace MercadoLibre\GlobalSelling\ItemUpdate;
use MercadoLibre\GlobalSelling\ItemInfo\Model\ItemInfo;
use MercadoLibre\GlobalSelling\GlobalSellingErrorMsg;
use MercadoLibre\GlobalSelling\GlobalSellingResponse;

/**
 * @property ItemInfo item
 */
class ItemUpdateResponse extends GlobalSellingResponse{
	public function __construct($result,$errors, $message = 'success', $data = []) {
		$msg = GlobalSellingErrorMsg::getMsg($errors);
		$msg and $message = $message.':'.$msg;
		parent::__construct($result,$errors, $message, $data, array(
			'item'   => [self::PARAM_TYPE_OBJECT, self::PARAM_OPTIONAL,ItemInfo::class],
		));
	}
}
