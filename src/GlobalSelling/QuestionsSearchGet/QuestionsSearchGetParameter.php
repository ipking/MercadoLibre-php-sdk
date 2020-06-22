<?php

namespace MercadoLibre\GlobalSelling\QuestionsSearchGet;

use MercadoLibre\GlobalSelling\GlobalSellingParameter;

/**
 * @property String seller_id
 * @property String offset
 * @property String limit
 * @property String status
 */
class QuestionsSearchGetParameter extends GlobalSellingParameter
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