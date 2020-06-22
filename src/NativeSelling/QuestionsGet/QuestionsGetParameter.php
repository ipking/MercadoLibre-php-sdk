<?php


namespace MercadoLibre\NativeSelling\QuestionsGet;

use MercadoLibre\NativeSelling\NativeSellingParameter;

/**
 * @property String question_id
 */
class QuestionsGetParameter extends NativeSellingParameter
{
	public function __construct($data = [])
	{
		parent::__construct($data, array(
			'question_id'    => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
		));
	}
}