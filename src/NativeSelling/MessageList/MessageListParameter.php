<?php


namespace MercadoLibre\NativeSelling\MessageList;

use MercadoLibre\NativeSelling\NativeSellingParameter;

/**
 * @property String seller_id
 * @property String pack_id
 */
class MessageListParameter extends NativeSellingParameter
{
	public function __construct($data = [])
	{
		parent::__construct($data, array(
			'seller_id' => [self::PARAM_TYPE_STRING, self::PARAM_REQUIRED],
			'pack_id'   => [self::PARAM_TYPE_STRING, self::PARAM_REQUIRED],
		));
	}
}