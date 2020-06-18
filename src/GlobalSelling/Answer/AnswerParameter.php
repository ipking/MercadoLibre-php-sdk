<?php


namespace MercadoLibre\GlobalSelling\Answer;

use MercadoLibre\GlobalSelling\ItemCreate\Model\AttributesParameter;
use MercadoLibre\GlobalSelling\ItemCreate\Model\ConditionEnum;
use MercadoLibre\GlobalSelling\ItemCreate\Model\PicturesParameter;
use MercadoLibre\GlobalSelling\ItemCreate\Model\VariationsParameter;
use MercadoLibre\GlobalSelling\Model\CurrencyEnum;
use MercadoLibre\GlobalSelling\GlobalSellingParameter;

/**
 * @property String question_id
 * @property String text
 */
class AnswerParameter extends GlobalSellingParameter
{
	public function __construct($data = [])
	{
		parent::__construct($data, array(
			'question_id' => [self::PARAM_TYPE_STRING, self::PARAM_REQUIRED],
			'text'        => [self::PARAM_TYPE_STRING, self::PARAM_REQUIRED],
		));
	}
}