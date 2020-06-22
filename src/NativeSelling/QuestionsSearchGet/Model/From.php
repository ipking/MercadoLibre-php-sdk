<?php

namespace MercadoLibre\NativeSelling\QuestionsSearchGet\Model;


use MercadoLibre\NativeSelling\NativeSellingParameter;

/**
 * @property string answered_questions
 * @property string id
 */
class From extends NativeSellingParameter
{
	public function __construct($data = [])
	{
		
		parent::__construct($data, array(
			'id'                 => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'answered_questions' => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
		));
	}
}

