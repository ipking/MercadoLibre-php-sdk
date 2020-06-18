<?php
/**
 * 账号信息的参数
 */

namespace MercadoLibre\GlobalSelling\UserInfo;

use MercadoLibre\GlobalSelling\GlobalSellingParameter;

/**
 * @property String seller_id
 */
class UserInfoParameter extends GlobalSellingParameter
{
	public function __construct($data = [])
	{
		parent::__construct($data, array(
			'seller_id' => [self::PARAM_TYPE_STRING, self::PARAM_REQUIRED],
		));
	}
}