<?php
/**
 * 产品信息的参数
 */

namespace MercadoLibre\GlobalSelling\MarketplaceItemsGet;

use MercadoLibre\Base\BaseParameter;

/**
 * @property String item_id
 */
class MarketplaceItemsGetParameter extends BaseParameter
{
	public function __construct($data = [])
	{
		parent::__construct($data, array(
			'item_id' => [self::PARAM_TYPE_STRING, self::PARAM_REQUIRED],
		));
	}
}