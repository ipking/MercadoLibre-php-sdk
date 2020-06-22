<?php
/**
 * 创建产品的响应
 */

namespace MercadoLibre\NativeSelling\ItemsPost;
use MercadoLibre\NativeSelling\ItemsGet\Model\ItemInfo;
use MercadoLibre\Base\BaseErrorMsg;
use MercadoLibre\Base\BaseResponse;

/**
 * @property ItemInfo item    产品
 */
class ItemsPostResponse extends BaseResponse{
	public function __construct($result,$errors, $message = 'success', $data = []) {
		$msg = BaseErrorMsg::getMsg($errors);
		$msg and $message = $msg;
		parent::__construct($result,$errors, $message, $data, array(
			'item'   => [self::PARAM_TYPE_OBJECT, self::PARAM_OPTIONAL,ItemInfo::class],
		));
	}
}
