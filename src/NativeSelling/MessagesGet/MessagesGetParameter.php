<?php


namespace MercadoLibre\NativeSelling\MessagesGet;

use MercadoLibre\Base\BaseParameter;

/**
 * @property String message_id
 */
class MessagesGetParameter extends BaseParameter
{
	public function __construct($data = [])
	{
		parent::__construct($data, array(
			'message_id' => [self::PARAM_TYPE_STRING, self::PARAM_REQUIRED],
		));
	}
}