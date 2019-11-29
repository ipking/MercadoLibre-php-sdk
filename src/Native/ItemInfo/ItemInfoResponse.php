<?php
/**
 * 产品信息的响应
 */

namespace MercadoLibre\Native\ItemInfo;
use MercadoLibre\Native\ItemInfo\Model\ItemInfo;
use MercadoLibre\Native\NativeErrorMsg;
use MercadoLibre\Native\NativeResponse;

/**
 * @property ItemInfo item
 */
class ItemInfoResponse extends NativeResponse{
	public function __construct($result,$errors, $message = 'success', $data = []) {
		$msg = NativeErrorMsg::getMsg($errors);
		$msg and $message = $msg;
		parent::__construct($result,$errors, $message, $data, array(
			'item'   => [self::PARAM_TYPE_OBJECT, self::PARAM_OPTIONAL,ItemInfo::class],
		));
	}
}
