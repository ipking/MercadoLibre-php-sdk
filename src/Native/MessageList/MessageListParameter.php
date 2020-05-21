<?php


namespace MercadoLibre\Native\MessageList;

use MercadoLibre\Native\NativeParameter;

/**
 * @property String seller_id
 * @property String pack_id
 */
class MessageListParameter extends NativeParameter
{
	public function __construct($data = [])
	{
		parent::__construct($data, array(
			'seller_id' => [self::PARAM_TYPE_STRING, self::PARAM_REQUIRED],
			'pack_id'   => [self::PARAM_TYPE_STRING, self::PARAM_REQUIRED],
		));
	}
}