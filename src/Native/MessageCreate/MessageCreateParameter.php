<?php


namespace MercadoLibre\Native\MessageCreate;

use MercadoLibre\Native\NativeParameter;

/**
 * @property String pack_id
 * @property String seller_id
 */
class MessageCreateParameter extends NativeParameter
{
	public function __construct($data = [])
	{
		parent::__construct($data, array(
			'pack_id'   => [self::PARAM_TYPE_STRING, self::PARAM_REQUIRED],
			'seller_id' => [self::PARAM_TYPE_STRING, self::PARAM_REQUIRED],
		));
	}
}