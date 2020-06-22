<?php

namespace MercadoLibre\NativeSelling\ClaimsMessagesGet\Model;


use MercadoLibre\Base\BaseParameter;

/**
 * @property string sender_role
 * @property string receiver_role
 * @property string stage
 * @property string date_created
 * @property string message
 * @property Attachment[] attachments
 */
class MessageInfo extends BaseParameter
{
	public function __construct($data = [])
	{
		parent::__construct($data, array(
			'sender_role'   => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'receiver_role' => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'stage'         => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'date_created'  => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'message'       => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'attachments'   => [self::PARAM_TYPE_ARRAY, self::PARAM_OPTIONAL,Attachment::class],
		));
	}
}
