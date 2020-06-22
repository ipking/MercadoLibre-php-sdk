<?php
namespace MercadoLibre\GlobalSelling\UsersGet;

use MercadoLibre\GlobalSelling\GlobalSellingParameter;

/**
 * @property String user_id
 */
class UsersGetParameter extends GlobalSellingParameter
{
	public function __construct($data = [])
	{
		parent::__construct($data, array(
			'user_id'    => [self::PARAM_TYPE_STRING, self::PARAM_REQUIRED],
		));
	}
}