<?php
/**
 * 创建产品的参数
 */

namespace MercadoLibre\GlobalSelling\ItemCreate;

use MercadoLibre\GlobalSelling\ItemCreate\Model\AttributesParameter;
use MercadoLibre\GlobalSelling\ItemCreate\Model\ConditionEnum;
use MercadoLibre\GlobalSelling\ItemCreate\Model\PicturesParameter;
use MercadoLibre\GlobalSelling\ItemCreate\Model\VariationsParameter;
use MercadoLibre\GlobalSelling\Model\CurrencyEnum;
use MercadoLibre\GlobalSelling\GlobalSellingParameter;

/**
 * @property String condition
 * @property String currency_id
 * @property bool accepts_mercadopago
 * @property String description
 * @property String listing_type_id
 * @property String title
 * @property int available_quantity
 * @property float price
 * @property String buying_mode
 * @property String category_id
 * @property PicturesParameter[] pictures
 * @property String warranty
 * @property AttributesParameter[] attributes
 * @property VariationsParameter[] variations
 */
class ItemCreateParameter extends GlobalSellingParameter
{
	public function __construct($data = [])
	{
		parent::__construct($data, array(
			'condition'           => [self::PARAM_TYPE_ENUM, self::PARAM_REQUIRED, ConditionEnum::class],
			'currency_id'         => [self::PARAM_TYPE_ENUM, self::PARAM_REQUIRED, CurrencyEnum::class],
			'accepts_mercadopago' => [self::PARAM_TYPE_BOOL, self::PARAM_REQUIRED],
			'description'         => [self::PARAM_TYPE_STRING, self::PARAM_ISSET],
			'listing_type_id'     => [self::PARAM_TYPE_STRING, self::PARAM_REQUIRED],
			'title'               => [self::PARAM_TYPE_STRING, self::PARAM_REQUIRED],
			'available_quantity'  => [self::PARAM_TYPE_NUMBER, self::PARAM_ISSET],
			'price'               => [self::PARAM_TYPE_NUMBER, self::PARAM_ISSET],
			'buying_mode'         => [self::PARAM_TYPE_STRING, self::PARAM_REQUIRED],
			'category_id'         => [self::PARAM_TYPE_STRING, self::PARAM_REQUIRED],
			'pictures'            => [self::PARAM_TYPE_ARRAY, self::PARAM_ISSET,PicturesParameter::class],
			'warranty'            => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'attributes'          => [self::PARAM_TYPE_ARRAY, self::PARAM_ISSET,AttributesParameter::class ],
			'variations'          => [self::PARAM_TYPE_ARRAY, self::PARAM_ISSET,VariationsParameter::class ],
		));
	}
}