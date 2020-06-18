<?php

namespace MercadoLibre\GlobalSelling\MessageList\Model;


use MercadoLibre\GlobalSelling\GlobalSellingParameter;
/**
 * @property string id
 * @property string site_id
 * @property string client_id
 * @property From from
 * @property To to
 * @property string status
 * @property string subject
 * @property string text
 * @property MessageDate message_date
 * @property MessageModeration message_moderation
 * @property MessageAttachment[] message_attachments
 * @property MessageResource[] message_resources
 * @property string conversation_first_message
 */
class MessageInfo extends GlobalSellingParameter
{
	public function __construct($data = [])
	{
		
		parent::__construct($data, array(
			'id'                         => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'site_id'                    => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'client_id'                  => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'from'                       => [self::PARAM_TYPE_OBJECT, self::PARAM_OPTIONAL,From::class],
			'to'                         => [self::PARAM_TYPE_OBJECT, self::PARAM_OPTIONAL,To::class],
			'status'                     => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'subject'                    => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'text'                       => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'message_date'               => [self::PARAM_TYPE_OBJECT, self::PARAM_OPTIONAL,MessageDate::class],
			'message_moderation'         => [self::PARAM_TYPE_OBJECT, self::PARAM_OPTIONAL,MessageModeration::class],
			'message_attachments'        => [self::PARAM_TYPE_ARRAY, self::PARAM_OPTIONAL,MessageAttachment::class],
			'message_resources'          => [self::PARAM_TYPE_ARRAY, self::PARAM_OPTIONAL,MessageResource::class],
			'conversation_first_message' => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
		));
	}
}
