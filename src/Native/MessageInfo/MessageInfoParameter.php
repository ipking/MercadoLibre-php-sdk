<?php


namespace MercadoLibre\Native\MessageInfo;

use MercadoLibre\Native\NativeParameter;

/**
 * @property String message_id
 */
class MessageInfoParameter extends NativeParameter
{
	public function __construct($data = [])
	{
		parent::__construct($data, array(
			'message_id' => [self::PARAM_TYPE_STRING, self::PARAM_REQUIRED],
		));
	}
}