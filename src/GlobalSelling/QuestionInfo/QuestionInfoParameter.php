<?php


namespace MercadoLibre\GlobalSelling\QuestionInfo;

use MercadoLibre\GlobalSelling\GlobalSellingParameter;

/**
 * @property String question_id
 */
class QuestionInfoParameter extends GlobalSellingParameter
{
	public function __construct($data = [])
	{
		parent::__construct($data, array(
			'question_id'    => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
		));
	}
}