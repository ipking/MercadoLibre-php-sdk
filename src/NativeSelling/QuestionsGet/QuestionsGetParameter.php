<?php


namespace MercadoLibre\NativeSelling\QuestionsGet;

use MercadoLibre\Base\BaseParameter;

/**
 * @property String question_id
 */
class QuestionsGetParameter extends BaseParameter
{
	public function __construct($data = [])
	{
		parent::__construct($data, array(
			'question_id'    => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
		));
	}
}