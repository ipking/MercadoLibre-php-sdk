<?php
/**
 * 产品描述的响应
 */

namespace MercadoLibre\NativeSelling\ItemsDescriptionGet;

use MercadoLibre\Base\BaseErrorMsg;
use MercadoLibre\Base\BaseResponse;

/**
 * @property string text
 * @property string plain_text
 */
class ItemsDescriptionGetResponse extends BaseResponse{
	public function __construct($result,$errors, $message = 'success', $data = []) {
		$msg = BaseErrorMsg::getMsg($errors);
		$msg and $message = $msg;
		parent::__construct($result,$errors, $message, $data, array(
			'text'       => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'plain_text' => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
		));
	}
}
