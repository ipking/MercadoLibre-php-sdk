<?php

namespace MercadoLibre\NativeSelling\MessagesPacksGet\Model;


use MercadoLibre\NativeSelling\NativeSellingParameter;

/**
 * @property string received
 * @property string available
 * @property string notified
 * @property string created
 * @property string read
 */
class MessageDate extends NativeSellingParameter
{
	public function __construct($data = [])
	{
		
		parent::__construct($data, array(
			'received'  => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'available' => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'notified'  => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'created'   => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'read'      => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
		));
	}
}
