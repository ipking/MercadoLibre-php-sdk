<?php

namespace MercadoLibre\NativeSelling\ItemsPut;

use MercadoLibre\NativeSelling\ItemsPOst\Model\Attribute;
use MercadoLibre\NativeSelling\ItemsPOst\Model\ConditionEnum;
use MercadoLibre\NativeSelling\ItemsPOst\Model\Picture;
use MercadoLibre\NativeSelling\ItemsPOst\Model\SaleTerm;
use MercadoLibre\NativeSelling\ItemsPost\Model\Shipping;
use MercadoLibre\NativeSelling\ItemsPOst\Model\Variation;
use MercadoLibre\Base\Model\CurrencyEnum;
use MercadoLibre\Base\BaseParameter;

/**
 * @property String item_id
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
 * @property Shipping shipping
 */
class ItemsPutParameter extends BaseParameter{
	public function __construct($data = []){
		parent::__construct($data, array(
			'item_id'             => [self::PARAM_TYPE_STRING, self::PARAM_REQUIRED],
			'condition'           => [self::PARAM_TYPE_ENUM, self::PARAM_ISSET, ConditionEnum::class],
			'currency_id'         => [self::PARAM_TYPE_ENUM, self::PARAM_ISSET, CurrencyEnum::class],
			'accepts_mercadopago' => [self::PARAM_TYPE_BOOL, self::PARAM_ISSET],
			'site_id'             => [self::PARAM_TYPE_STRING, self::PARAM_ISSET],
			'description'         => [self::PARAM_TYPE_STRING, self::PARAM_ISSET],
			'listing_type_id'     => [self::PARAM_TYPE_STRING, self::PARAM_ISSET],
			'title'               => [self::PARAM_TYPE_STRING, self::PARAM_ISSET],
			'available_quantity'  => [self::PARAM_TYPE_NUMBER, self::PARAM_ISSET],
			'price'               => [self::PARAM_TYPE_NUMBER, self::PARAM_ISSET],
			'buying_mode'         => [self::PARAM_TYPE_STRING, self::PARAM_ISSET],
			'category_id'         => [self::PARAM_TYPE_STRING, self::PARAM_ISSET],
			'pictures'            => [self::PARAM_TYPE_ARRAY, self::PARAM_ISSET, Picture::class],
			'warranty'            => [self::PARAM_TYPE_STRING, self::PARAM_ISSET],
			'sale_terms'          => [self::PARAM_TYPE_ARRAY, self::PARAM_ISSET, SaleTerm::class],
			'attributes'          => [self::PARAM_TYPE_ARRAY, self::PARAM_ISSET, Attribute::class],
			'variations'          => [self::PARAM_TYPE_ARRAY, self::PARAM_ISSET, Variation::class],
			'shipping'            => [self::PARAM_TYPE_OBJECT, self::PARAM_ISSET, Shipping::class],
		));
	}
}