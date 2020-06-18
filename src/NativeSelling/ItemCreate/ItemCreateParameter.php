<?php
/**
 * 创建产品的参数
 */

namespace MercadoLibre\NativeSelling\ItemCreate;

use MercadoLibre\NativeSelling\ItemCreate\Model\Attribute;
use MercadoLibre\NativeSelling\ItemCreate\Model\ConditionEnum;
use MercadoLibre\NativeSelling\ItemCreate\Model\Picture;
use MercadoLibre\NativeSelling\ItemCreate\Model\SaleTerm;
use MercadoLibre\NativeSelling\ItemCreate\Model\Variation;
use MercadoLibre\NativeSelling\Model\CurrencyEnum;
use MercadoLibre\NativeSelling\NativeSellingParameter;

/**
 * @property String condition
 * @property String currency_id
 * @property bool accepts_mercadopago
 * @property String site_id
 * @property String description
 * @property String listing_type_id
 * @property String title
 * @property int available_quantity
 * @property float price
 * @property String buying_mode
 * @property String category_id
 * @property Picture[] pictures
 * @property String warranty
 * @property SaleTerm[] sale_terms
 * @property Attribute[] attributes
 * @property Variation[] variations
 */
class ItemCreateParameter extends NativeSellingParameter
{
	public function __construct($data = [])
	{
		parent::__construct($data, array(
			'condition'           => [self::PARAM_TYPE_ENUM, self::PARAM_REQUIRED, ConditionEnum::class],
			'currency_id'         => [self::PARAM_TYPE_ENUM, self::PARAM_REQUIRED, CurrencyEnum::class],
			'accepts_mercadopago' => [self::PARAM_TYPE_BOOL, self::PARAM_REQUIRED],
			'site_id'             => [self::PARAM_TYPE_STRING, self::PARAM_ISSET],
			'description'         => [self::PARAM_TYPE_STRING, self::PARAM_ISSET],
			'listing_type_id'     => [self::PARAM_TYPE_STRING, self::PARAM_REQUIRED],
			'title'               => [self::PARAM_TYPE_STRING, self::PARAM_REQUIRED],
			'available_quantity'  => [self::PARAM_TYPE_NUMBER, self::PARAM_ISSET],
			'price'               => [self::PARAM_TYPE_NUMBER, self::PARAM_ISSET],
			'buying_mode'         => [self::PARAM_TYPE_STRING, self::PARAM_REQUIRED],
			'category_id'         => [self::PARAM_TYPE_STRING, self::PARAM_REQUIRED],
			'pictures'            => [self::PARAM_TYPE_ARRAY, self::PARAM_ISSET, Picture::class],
			'warranty'            => [self::PARAM_TYPE_STRING, self::PARAM_ISSET],
			'sale_terms'          => [self::PARAM_TYPE_ARRAY, self::PARAM_ISSET, SaleTerm::class],
			'attributes'          => [self::PARAM_TYPE_ARRAY, self::PARAM_ISSET, Attribute::class],
			'variations'          => [self::PARAM_TYPE_ARRAY, self::PARAM_ISSET, Variation::class],
		));
	}
}