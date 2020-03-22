<?php

namespace MercadoLibre\Native\ItemInfo\Model;


use MercadoLibre\Native\NativeParameter;
/**
 * @property string id
 * @property Attribute[] attribute_combinations
 * @property Attribute[] attributes
 * @property string picture_ids
 * @property string price
 * @property string available_quantity
 * @property string seller_custom_field
 * @property string sold_quantity
 */
class Variation extends NativeParameter
{
	public function __construct($data = [])
	{
		parent::__construct($data, array(
			'id'                     => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'attribute_combinations' => [self::PARAM_TYPE_ARRAY, self::PARAM_REQUIRED, Attribute::class],
			'attributes'             => [self::PARAM_TYPE_ARRAY, self::PARAM_ISSET, Attribute::class],
			'picture_ids'            => [self::PARAM_TYPE_ARRAY, self::PARAM_OPTIONAL, self::PARAM_TYPE_STRING],
			'price'                  => [self::PARAM_TYPE_STRING, self::PARAM_REQUIRED],
			'available_quantity'     => [self::PARAM_TYPE_STRING, self::PARAM_REQUIRED],
			'seller_custom_field'    => [self::PARAM_TYPE_STRING, self::PARAM_REQUIRED],
			'sold_quantity'          => [self::PARAM_TYPE_STRING, self::PARAM_REQUIRED],
		));
	}
}