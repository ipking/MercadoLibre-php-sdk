<?php
namespace MercadoLibre\GlobalSelling\MarketplaceUsersGet;

use MercadoLibre\Base\BaseParameter;

/**
 * @property String user_id
 */
class MarketplaceUsersGetParameter extends BaseParameter
{
	public function __construct($data = [])
	{
		parent::__construct($data, array(
			'user_id'    => [self::PARAM_TYPE_STRING, self::PARAM_REQUIRED],
		));
	}
}