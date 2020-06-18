<?php
/**
 * 账号信息的参数
 */

namespace MercadoLibre\NativeSelling\UserInfo;

use MercadoLibre\NativeSelling\NativeSellingParameter;

/**
 * @property String seller_id
 */
class UserInfoParameter extends NativeSellingParameter
{
	public function __construct($data = [])
	{
		parent::__construct($data, array(
			'seller_id' => [self::PARAM_TYPE_STRING, self::PARAM_REQUIRED],
		));
	}
}