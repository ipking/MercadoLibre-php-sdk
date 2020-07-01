<?php


namespace MercadoLibre\GlobalSelling\MarketplaceMessagesGet;

use MercadoLibre\Base\BaseParameter;

/**
 * @property String message_id
 */
class MarketplaceMessagesGetParameter extends BaseParameter
{
	public function __construct($data = [])
	{
		parent::__construct($data, array(
			'message_id' => [self::PARAM_TYPE_STRING, self::PARAM_REQUIRED],
		));
	}
}