<?php

namespace MercadoLibre\Native\QuestionList\Model;


use MercadoLibre\Native\NativeParameter;
/**
 * @property string date_created
 * @property string status
 * @property string text
 */
class Answer extends NativeParameter
{
	public function __construct($data = [])
	{
		
		parent::__construct($data, array(
			'date_created' => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'status'       => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'text'         => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
		));
	}
}
