<?php
/**
 * 产品描述的响应
 */

namespace MercadoLibre\NativeSelling\ItemsDescriptionPut;

use MercadoLibre\Base\BaseErrorMsg;
use MercadoLibre\Base\BaseResponse;

/**
 * @property string text
 * @property string plain_text
 */
class ItemsDescriptionPutResponse extends BaseResponse{
	public function __construct($result,$errors, $message = 'success', $data = []) {
		$msg = BaseErrorMsg::getMsg($errors);
		$msg and $message = $msg;
		parent::__construct($result,$errors, $message, $data, array(
		));
	}
}
