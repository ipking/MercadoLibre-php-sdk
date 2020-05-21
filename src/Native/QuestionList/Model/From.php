<?php

namespace MercadoLibre\Native\QuestionList\Model;


use MercadoLibre\Native\NativeParameter;
/**
 * @property string answered_questions
 * @property string id
 */
class From extends NativeParameter
{
	public function __construct($data = [])
	{
		
		parent::__construct($data, array(
			'id'                 => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'answered_questions' => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
		));
	}
}

