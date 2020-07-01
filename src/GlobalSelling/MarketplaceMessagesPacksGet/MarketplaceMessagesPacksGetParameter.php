<?php


namespace MercadoLibre\GlobalSelling\MarketplaceMessagesPacksGet;

use MercadoLibre\Base\BaseParameter;

/**
 * @property String pack_id
 */
class MarketplaceMessagesPacksGetParameter extends BaseParameter
{
	public function __construct($data = [])
	{
		parent::__construct($data, array(
			'pack_id'   => [self::PARAM_TYPE_STRING, self::PARAM_REQUIRED],
		));
	}
}