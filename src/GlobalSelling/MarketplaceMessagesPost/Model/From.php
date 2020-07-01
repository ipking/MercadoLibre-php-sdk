<?php

namespace MercadoLibre\GlobalSelling\MarketplaceMessagesPost\Model;


use MercadoLibre\Base\BaseParameter;

/**
 * @property string user_id
 * @property string email
 */
class From extends BaseParameter
{
	public function __construct($data = [])
	{
		parent::__construct($data, array(
			'user_id' => [self::PARAM_TYPE_STRING, self::PARAM_REQUIRED],
			'email'   => [self::PARAM_TYPE_STRING, self::PARAM_REQUIRED],
		));
	}
}
