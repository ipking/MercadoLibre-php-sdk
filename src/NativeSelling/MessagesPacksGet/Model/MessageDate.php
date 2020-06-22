<?php

namespace MercadoLibre\NativeSelling\MessagesPacksGet\Model;


use MercadoLibre\Base\BaseParameter;

/**
 * @property string received
 * @property string available
 * @property string notified
 * @property string created
 * @property string read
 */
class MessageDate extends BaseParameter
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
