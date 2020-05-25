<?php
/**
 * 产品描述的响应
 */

namespace MercadoLibre\Native\ItemUpdateDescription;

use MercadoLibre\Native\NativeErrorMsg;
use MercadoLibre\Native\NativeResponse;

/**
 * @property string text
 * @property string plain_text
 */
class ItemUpdateDescriptionResponse extends NativeResponse{
	public function __construct($result,$errors, $message = 'success', $data = []) {
		$msg = NativeErrorMsg::getMsg($errors);
		$msg and $message = $msg;
		parent::__construct($result,$errors, $message, $data, array(
		));
	}
}
