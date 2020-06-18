<?php
namespace MercadoLibre\GlobalSelling\UsersGet;

use MercadoLibre\NativeSelling\NativeSellingParameter;

/**
 * @property String user_id
 */
class UsersGetParameter extends NativeSellingParameter
{
	public function __construct($data = [])
	{
		parent::__construct($data, array(
			'user_id'    => [self::PARAM_TYPE_STRING, self::PARAM_REQUIRED],
		));
	}
}