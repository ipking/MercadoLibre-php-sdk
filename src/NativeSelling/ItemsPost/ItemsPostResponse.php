<?php
/**
 * 创建产品的响应
 */

namespace MercadoLibre\NativeSelling\ItemsPost;
use MercadoLibre\NativeSelling\ItemsGet\Model\ItemInfo;
use MercadoLibre\NativeSelling\NativeSellingErrorMsg;
use MercadoLibre\NativeSelling\NativeSellingResponse;

/**
 * @property ItemInfo item    产品
 */
class ItemsPostResponse extends NativeSellingResponse{
	public function __construct($result,$errors, $message = 'success', $data = []) {
		$msg = NativeSellingErrorMsg::getMsg($errors);
		$msg and $message = $msg;
		parent::__construct($result,$errors, $message, $data, array(
			'item'   => [self::PARAM_TYPE_OBJECT, self::PARAM_OPTIONAL,ItemInfo::class],
		));
	}
}
