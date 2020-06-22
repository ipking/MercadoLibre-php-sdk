<?php


namespace MercadoLibre\GlobalSelling\AnswersPost;

use MercadoLibre\GlobalSelling\GlobalSellingParameter;

/**
 * @property String question_id
 * @property String text
 * @property String text_translated
 */
class AnswersPostParameter extends GlobalSellingParameter
{
	public function __construct($data = [])
	{
		parent::__construct($data, array(
			'question_id'     => [self::PARAM_TYPE_STRING, self::PARAM_REQUIRED],
			'text'            => [self::PARAM_TYPE_STRING, self::PARAM_REQUIRED],
			'text_translated' => [self::PARAM_TYPE_STRING, self::PARAM_ISSET],
		));
	}
}