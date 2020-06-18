<?php


namespace MercadoLibre\NativeSelling\QuestionInfo;

use MercadoLibre\NativeSelling\NativeSellingParameter;

/**
 * @property String question_id
 */
class QuestionInfoParameter extends NativeSellingParameter
{
	public function __construct($data = [])
	{
		parent::__construct($data, array(
			'question_id'    => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
		));
	}
}