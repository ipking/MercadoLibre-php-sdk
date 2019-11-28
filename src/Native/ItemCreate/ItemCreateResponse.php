<?php
/**
 * 创建产品的响应
 */

namespace MercadoLibre\Native\ItemCreate;
use MercadoLibre\Native\NativeErrorMsg;
use MercadoLibre\Native\NativeResponse;

/**
 * @property string item_id    产品id
 */
class ItemCreateResponse extends NativeResponse{
	public function __construct($result,$errors, $message = 'success', $data = []) {
		$msg = NativeErrorMsg::getMsg($errors);
		$msg and $message = $msg;
		parent::__construct($result,$errors, $message, $data, array(
			'item_id'   => [self::PARAM_TYPE_STRING, self::PARAM_REQUIRED],
		));
	}
}
