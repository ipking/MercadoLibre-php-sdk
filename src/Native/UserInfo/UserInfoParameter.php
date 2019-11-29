<?php
/**
 * 账号信息的参数
 */

namespace MercadoLibre\Native\UserInfo;

use MercadoLibre\Native\NativeParameter;

/**
 * @property String user_id
 */
class UserInfoParameter extends NativeParameter
{
	public function __construct($data = [])
	{
		parent::__construct($data, array(
			'user_id' => [self::PARAM_TYPE_STRING, self::PARAM_REQUIRED],
		));
	}
}