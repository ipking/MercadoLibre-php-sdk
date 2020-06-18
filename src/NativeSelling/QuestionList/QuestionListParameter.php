<?php


namespace MercadoLibre\NativeSelling\QuestionList;

use MercadoLibre\NativeSelling\NativeSellingParameter;

/**
 * @property String seller_id
 * @property String offset
 * @property String limit
 * @property String status
 */
class QuestionListParameter extends NativeSellingParameter
{
	public function __construct($data = [])
	{
		parent::__construct($data, array(
			'seller_id'    => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'offset'       => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'limit'        => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'status'       => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
		));
	}
}