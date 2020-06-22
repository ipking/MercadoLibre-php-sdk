<?php


namespace MercadoLibre\NativeSelling\AnswersPost;

use MercadoLibre\NativeSelling\NativeSellingParameter;

/**
 * @property String question_id
 * @property String text
 */
class AnswersPostParameter extends NativeSellingParameter
{
	public function __construct($data = [])
	{
		parent::__construct($data, array(
			'question_id' => [self::PARAM_TYPE_STRING, self::PARAM_REQUIRED],
			'text'        => [self::PARAM_TYPE_STRING, self::PARAM_REQUIRED],
		));
	}
}