<?php


namespace MercadoLibre\NativeSelling\MessagesGet;

use MercadoLibre\NativeSelling\NativeSellingParameter;

/**
 * @property String message_id
 */
class MessagesGetParameter extends NativeSellingParameter
{
	public function __construct($data = [])
	{
		parent::__construct($data, array(
			'message_id' => [self::PARAM_TYPE_STRING, self::PARAM_REQUIRED],
		));
	}
}