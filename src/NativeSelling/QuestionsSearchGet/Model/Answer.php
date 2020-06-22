<?php

namespace MercadoLibre\NativeSelling\QuestionsSearchGet\Model;


use MercadoLibre\NativeSelling\NativeSellingParameter;

/**
 * @property string date_created
 * @property string status
 * @property string text
 */
class Answer extends NativeSellingParameter
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
