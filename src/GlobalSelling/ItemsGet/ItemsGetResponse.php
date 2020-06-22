<?php
/**
 * 产品信息的响应
 */

namespace MercadoLibre\GlobalSelling\ItemsGet;
use MercadoLibre\GlobalSelling\ItemsGet\Model\ItemInfo;
use MercadoLibre\GlobalSelling\GlobalSellingErrorMsg;
use MercadoLibre\GlobalSelling\GlobalSellingResponse;

/**
 * @property ItemInfo item
 */
class ItemsGetResponse extends GlobalSellingResponse{
	public function __construct($result,$errors, $message = 'success', $data = []) {
		$msg = GlobalSellingErrorMsg::getMsg($errors);
		$msg and $message = $msg;
		parent::__construct($result,$errors, $message, $data, array(
			'item'   => [self::PARAM_TYPE_OBJECT, self::PARAM_OPTIONAL,ItemInfo::class],
		));
	}
}
