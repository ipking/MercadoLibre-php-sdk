<?php

namespace MercadoLibre\Native\ItemCreate\Model;


use MercadoLibre\Native\NativeParameter;
/**
 * @property AttributesParameter[] attribute_combinations
 * @property AttributesParameter[] attributes
 * @property array picture_ids
 * @property string price
 * @property string available_quantity
 * @property string seller_custom_field
 */
class VariationsParameter extends NativeParameter
{
	public function __construct($data = [])
	{
		parent::__construct($data, array(
			'attribute_combinations' => [self::PARAM_TYPE_ARRAY, self::PARAM_REQUIRED,AttributesParameter::class],
			'attributes'             => [self::PARAM_TYPE_ARRAY, self::PARAM_ISSET,AttributesParameter::class],
			'picture_ids'            => [self::PARAM_TYPE_ARRAY, self::PARAM_OPTIONAL, self::PARAM_TYPE_STRING],
			'price'                  => [self::PARAM_TYPE_STRING, self::PARAM_REQUIRED],
			'available_quantity'     => [self::PARAM_TYPE_STRING, self::PARAM_REQUIRED],
			'seller_custom_field'    => [self::PARAM_TYPE_STRING, self::PARAM_REQUIRED],
		));
	}
}