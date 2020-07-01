<?php

namespace MercadoLibre\GlobalSelling\MarketplaceMessagesPacksGet\Model;


use MercadoLibre\Base\BaseParameter;

/**
 * @property string status
 * @property string reason
 * @property string source
 * @property string moderation_date
 */
class MessageModeration extends BaseParameter
{
	public function __construct($data = [])
	{
		
		parent::__construct($data, array(
			'status'          => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'reason'          => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'source'          => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'moderation_date' => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
		));
	}
}