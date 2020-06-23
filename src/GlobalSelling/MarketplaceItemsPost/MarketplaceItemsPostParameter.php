<?php
namespace MercadoLibre\GlobalSelling\MarketplaceItemsPost;

use MercadoLibre\GlobalSelling\MarketplaceItemsPost\Model\Config;
use MercadoLibre\Base\BaseParameter;

/**
 * @property string item_id
 * @property Config[] config
 */
class MarketplaceItemsPostParameter extends BaseParameter
{
	public function __construct($data = [])
	{
		parent::__construct($data, array(
			'item_id' => [self::PARAM_TYPE_STRING, self::PARAM_REQUIRED],
			'config'  => [self::PARAM_TYPE_ARRAY, self::PARAM_REQUIRED, Config::class],
		));
	}
}