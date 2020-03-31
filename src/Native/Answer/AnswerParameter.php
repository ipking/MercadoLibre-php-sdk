<?php


namespace MercadoLibre\Native\Answer;

use MercadoLibre\Native\ItemCreate\Model\AttributesParameter;
use MercadoLibre\Native\ItemCreate\Model\ConditionEnum;
use MercadoLibre\Native\ItemCreate\Model\PicturesParameter;
use MercadoLibre\Native\ItemCreate\Model\VariationsParameter;
use MercadoLibre\Native\Model\CurrencyEnum;
use MercadoLibre\Native\NativeParameter;

/**
 * @property String question_id
 * @property String text
 */
class AnswerParameter extends NativeParameter
{
	public function __construct($data = [])
	{
		parent::__construct($data, array(
			'question_id' => [self::PARAM_TYPE_STRING, self::PARAM_REQUIRED],
			'text'        => [self::PARAM_TYPE_STRING, self::PARAM_REQUIRED],
		));
	}
}