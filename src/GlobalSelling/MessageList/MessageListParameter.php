<?php


namespace MercadoLibre\GlobalSelling\MessageList;

use MercadoLibre\GlobalSelling\GlobalSellingParameter;

/**
 * @property String seller_id
 * @property String pack_id
 */
class MessageListParameter extends GlobalSellingParameter
{
	public function __construct($data = [])
	{
		parent::__construct($data, array(
			'seller_id' => [self::PARAM_TYPE_STRING, self::PARAM_REQUIRED],
			'pack_id'   => [self::PARAM_TYPE_STRING, self::PARAM_REQUIRED],
		));
	}
}