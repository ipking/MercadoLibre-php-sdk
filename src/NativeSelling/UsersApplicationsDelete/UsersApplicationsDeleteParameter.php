<?php

namespace MercadoLibre\NativeSelling\UsersApplicationsDelete;

use MercadoLibre\Base\BaseParameter;

/**
 * @property String seller_id
 * @property String app_id
 */
class UsersApplicationsDeleteParameter extends BaseParameter
{
	public function __construct($data = [])
	{
		parent::__construct($data, array(
			'seller_id' => [self::PARAM_TYPE_STRING, self::PARAM_REQUIRED],
			'app_id'    => [self::PARAM_TYPE_STRING, self::PARAM_REQUIRED],
		));
	}
}