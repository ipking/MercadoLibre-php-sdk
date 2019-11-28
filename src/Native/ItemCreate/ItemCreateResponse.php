<?php
/**
 * 创建产品的响应
 */

namespace MercadoLibre\Native\ItemCreate;
use MercadoLibre\Native\NativeErrorMsg;
use MercadoLibre\Native\NativeResponse;

/**
 * @property string rma_no    退货单号
 */
class ItemCreateResponse extends NativeResponse{
	public function __construct($result,$errors, $message = 'success', $data = []) {
		$msg = NativeErrorMsg::getMsg(ItemCreateErrorCode::$codeMessageMap,$errors);
		$msg and $message = $msg;
		parent::__construct($result,$errors, $message, $data, array(
			'rma_no'   => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
		));
	}
}
