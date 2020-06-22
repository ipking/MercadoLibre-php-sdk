<?php
namespace MercadoLibre\GlobalSelling\ItemsPost;

use MercadoLibre\GlobalSelling\ItemsPost\Model\Config;
use MercadoLibre\GlobalSelling\GlobalSellingParameter;

/**
 * @property string item_id
 * @property Config[] config
 */
class ItemsPostParameter extends GlobalSellingParameter
{
	public function __construct($data = [])
	{
		parent::__construct($data, array(
			'item_id' => [self::PARAM_TYPE_STRING, self::PARAM_REQUIRED],
			'config'  => [self::PARAM_TYPE_ARRAY, self::PARAM_REQUIRED, Config::class],
		));
	}
}