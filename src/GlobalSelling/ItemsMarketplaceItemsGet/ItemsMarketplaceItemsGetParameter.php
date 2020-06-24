<?php

namespace MercadoLibre\GlobalSelling\ItemsMarketplaceItemsGet;

use MercadoLibre\Base\BaseParameter;

/**
 * @property String item_id
 */
class ItemsMarketplaceItemsGetParameter extends BaseParameter
{
	public function __construct($data = [])
	{
		parent::__construct($data, array(
			'item_id' => [self::PARAM_TYPE_STRING, self::PARAM_REQUIRED],
		));
	}
}