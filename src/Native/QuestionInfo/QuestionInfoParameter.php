<?php


namespace MercadoLibre\Native\QuestionInfo;

use MercadoLibre\Native\NativeParameter;

/**
 * @property String question_id
 */
class QuestionInfoParameter extends NativeParameter
{
	public function __construct($data = [])
	{
		parent::__construct($data, array(
			'question_id'    => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
		));
	}
}