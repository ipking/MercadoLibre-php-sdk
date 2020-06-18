<?php


namespace MercadoLibre\NativeSelling\Answer;

use MercadoLibre\NativeSelling\ItemCreate\Model\AttributesParameter;
use MercadoLibre\NativeSelling\ItemCreate\Model\ConditionEnum;
use MercadoLibre\NativeSelling\ItemCreate\Model\PicturesParameter;
use MercadoLibre\NativeSelling\ItemCreate\Model\VariationsParameter;
use MercadoLibre\NativeSelling\Model\CurrencyEnum;
use MercadoLibre\NativeSelling\NativeSellingParameter;

/**
 * @property String question_id
 * @property String text
 */
class AnswerParameter extends NativeSellingParameter
{
	public function __construct($data = [])
	{
		parent::__construct($data, array(
			'question_id' => [self::PARAM_TYPE_STRING, self::PARAM_REQUIRED],
			'text'        => [self::PARAM_TYPE_STRING, self::PARAM_REQUIRED],
		));
	}
}