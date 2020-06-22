<?php
/**
 * 产品信息的响应
 */

namespace MercadoLibre\GlobalSelling\ItemsGet;
use MercadoLibre\GlobalSelling\ItemsGet\Model\ItemInfo;
use MercadoLibre\Base\BaseErrorMsg;
use MercadoLibre\Base\BaseResponse;

/**
 * @property ItemInfo item
 */
class ItemsGetResponse extends BaseResponse{
	public function __construct($result,$errors, $message = 'success', $data = []) {
		$msg = BaseErrorMsg::getMsg($errors);
		$msg and $message = $msg;
		parent::__construct($result,$errors, $message, $data, array(
			'item'   => [self::PARAM_TYPE_OBJECT, self::PARAM_OPTIONAL,ItemInfo::class],
		));
	}
}
