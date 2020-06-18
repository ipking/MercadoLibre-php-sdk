<?php

namespace MercadoLibre\GlobalSelling\ClaimList\Model;


use MercadoLibre\GlobalSelling\GlobalSellingParameter;
/**
 * @property string reason
 * @property string date_created
 * @property array benefited
 * @property string closed_by
 */
class Resolution extends GlobalSellingParameter
{
	public function __construct($data = [])
	{
		parent::__construct($data, array(
			'reason'       => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'date_created' => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'benefited'    => [self::PARAM_TYPE_ARRAY, self::PARAM_OPTIONAL,self::PARAM_TYPE_STRING],
			'closed_by'    => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
		));
	}
}
