<?php
namespace MercadoLibre\GlobalSelling\ItemsPost;

use MercadoLibre\GlobalSelling\ItemsPost\Model\Config;
use MercadoLibre\NativeSelling\NativeSellingParameter;

/**
 * @property string item_id
 * @property Config[] config
 */
class ItemsPostParameter extends NativeSellingParameter
{
	public function __construct($data = [])
	{
		parent::__construct($data, array(
			'item_id' => [self::PARAM_TYPE_STRING, self::PARAM_REQUIRED],
			'config'  => [self::PARAM_TYPE_ARRAY, self::PARAM_REQUIRED, Config::class],
		));
	}
}