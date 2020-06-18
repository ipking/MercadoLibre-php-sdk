<?php
/**
 * 产品描述的响应
 */

namespace MercadoLibre\NativeSelling\DeleteVariations;

use MercadoLibre\NativeSelling\NativeSellingErrorMsg;
use MercadoLibre\NativeSelling\NativeSellingResponse;

/**
 * @property string text
 * @property string plain_text
 */
class DeleteVariationsResponse extends NativeSellingResponse{
	public function __construct($result,$errors, $message = 'success', $data = []) {
		$msg = NativeSellingErrorMsg::getMsg($errors);
		$msg and $message = $msg;
		parent::__construct($result,$errors, $message, $data, array(
		));
	}
}