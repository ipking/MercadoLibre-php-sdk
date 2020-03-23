<?php
/**
 * 产品描述的响应
 */

namespace MercadoLibre\Native\ItemDescription;
use MercadoLibre\Native\ItemInfo\Model\ItemInfo;
use MercadoLibre\Native\NativeErrorMsg;
use MercadoLibre\Native\NativeResponse;

/**
 * @property string text
 * @property string plain_text
 */
class ItemDescriptionResponse extends NativeResponse{
	public function __construct($result,$errors, $message = 'success', $data = []) {
		$msg = NativeErrorMsg::getMsg($errors);
		$msg and $message = $msg;
		parent::__construct($result,$errors, $message, $data, array(
			'text'       => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'plain_text' => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
		));
	}
}
