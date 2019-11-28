<?php
/**
 * 创建产品的参数
 */

namespace MercadoLibre\Native\ItemCreate;

use MercadoLibre\Native\ItemCreate\Model\ConditionEnum;
use MercadoLibre\Native\Model\CurrencyEnum;
use MercadoLibre\Native\NativeParameter;

/**
 * @property String condition
 * @property String warranty
 * @property String currency_id
 * @property String accepts_mercadopago
 * @property String description
 * @property String listing_type_id
 * @property String title
 * @property String available_quantity
 * @property String price
 * @property String buying_mode
 * @property String category_id
 * @property String pictures
 */
class ItemCreateParameter extends NativeParameter
{
	public function __construct($data = [])
	{
		parent::__construct($data, array(
			'condition'           => [self::PARAM_TYPE_ENUM, self::PARAM_REQUIRED, ConditionEnum::class],
			'warranty'            => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'currency_id'         => [self::PARAM_TYPE_ENUM, self::PARAM_REQUIRED, CurrencyEnum::class],
			'accepts_mercadopago' => [self::PARAM_TYPE_BOOL, self::PARAM_REQUIRED],
			'description'         => [self::PARAM_TYPE_STRING, self::PARAM_REQUIRED],
			'listing_type_id'     => [self::PARAM_TYPE_STRING, self::PARAM_REQUIRED],
			'title'               => [self::PARAM_TYPE_STRING, self::PARAM_REQUIRED],
			'available_quantity'  => [self::PARAM_TYPE_NUMBER, self::PARAM_REQUIRED],
			'price'               => [self::PARAM_TYPE_NUMBER, self::PARAM_REQUIRED],
			'buying_mode'         => [self::PARAM_TYPE_STRING, self::PARAM_REQUIRED],
			'category_id'         => [self::PARAM_TYPE_STRING, self::PARAM_REQUIRED],
			'pictures'            => [self::PARAM_TYPE_ARRAY, self::PARAM_REQUIRED],
		));
	}
}