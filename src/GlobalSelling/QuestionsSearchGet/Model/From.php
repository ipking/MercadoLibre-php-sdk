<?php

namespace MercadoLibre\GlobalSelling\QuestionsSearchGet\Model;


use MercadoLibre\GlobalSelling\GlobalSellingParameter;

/**
 * @property string answered_questions
 * @property string id
 */
class From extends GlobalSellingParameter
{
	public function __construct($data = [])
	{
		parent::__construct($data, array(
			'id'                 => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'answered_questions' => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
		));
	}
}

