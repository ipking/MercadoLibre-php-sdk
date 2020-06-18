<?php


namespace MercadoLibre\GlobalSelling\MessageInfo;

use MercadoLibre\GlobalSelling\GlobalSellingParameter;

/**
 * @property String message_id
 */
class MessageInfoParameter extends GlobalSellingParameter
{
	public function __construct($data = [])
	{
		parent::__construct($data, array(
			'message_id' => [self::PARAM_TYPE_STRING, self::PARAM_REQUIRED],
		));
	}
}