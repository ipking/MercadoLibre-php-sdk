<?php


namespace MercadoLibre\NativeSelling\MessagesPacksGet;

use MercadoLibre\Base\BaseParameter;

/**
 * @property String seller_id
 * @property String pack_id
 */
class MessagesPacksGetParameter extends BaseParameter
{
	public function __construct($data = [])
	{
		parent::__construct($data, array(
			'seller_id' => [self::PARAM_TYPE_STRING, self::PARAM_REQUIRED],
			'pack_id'   => [self::PARAM_TYPE_STRING, self::PARAM_REQUIRED],
		));
	}
}