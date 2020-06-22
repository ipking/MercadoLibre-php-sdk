<?php


namespace MercadoLibre\GlobalSelling\QuestionsGet;

use MercadoLibre\GlobalSelling\GlobalSellingParameter;

/**
 * @property String question_id
 */
class QuestionsGetParameter extends GlobalSellingParameter
{
	public function __construct($data = [])
	{
		parent::__construct($data, array(
			'question_id'    => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
		));
	}
}