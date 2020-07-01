<?php


namespace MercadoLibre\GlobalSelling\MarketplaceQuestionsGet;

use MercadoLibre\Base\BaseParameter;

/**
 * @property String question_id
 */
class MarketplaceQuestionsGetParameter extends BaseParameter
{
	public function __construct($data = [])
	{
		parent::__construct($data, array(
			'question_id'    => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
		));
	}
}