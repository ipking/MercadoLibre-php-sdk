<?php


namespace MercadoLibre\NativeSelling\MessageInfo;

use MercadoLibre\NativeSelling\NativeSellingParameter;

/**
 * @property String message_id
 */
class MessageInfoParameter extends NativeSellingParameter
{
	public function __construct($data = [])
	{
		parent::__construct($data, array(
			'message_id' => [self::PARAM_TYPE_STRING, self::PARAM_REQUIRED],
		));
	}
}