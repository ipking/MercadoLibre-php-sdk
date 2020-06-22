<?php

namespace MercadoLibre\NativeSelling\ItemsPost\Model;


use MercadoLibre\Base\BaseParameter;

/**
 * @property Attribute[] attribute_combinations
 * @property Attribute[] attributes
 * @property array picture_ids
 * @property string price
 * @property string available_quantity
 * @property string seller_custom_field
 */
class Variation extends BaseParameter
{
	public function __construct($data = [])
	{
		parent::__construct($data, array(
			'attribute_combinations' => [self::PARAM_TYPE_ARRAY, self::PARAM_REQUIRED,Attribute::class],
			'attributes'             => [self::PARAM_TYPE_ARRAY, self::PARAM_ISSET,Attribute::class],
			'picture_ids'            => [self::PARAM_TYPE_ARRAY, self::PARAM_OPTIONAL, self::PARAM_TYPE_STRING],
			'price'                  => [self::PARAM_TYPE_STRING, self::PARAM_REQUIRED],
			'available_quantity'     => [self::PARAM_TYPE_STRING, self::PARAM_REQUIRED],
			'seller_custom_field'    => [self::PARAM_TYPE_STRING, self::PARAM_REQUIRED],
		));
	}
}