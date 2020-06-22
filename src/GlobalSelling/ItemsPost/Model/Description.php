<?php

namespace MercadoLibre\GlobalSelling\ItemsPost\Model;

use MercadoLibre\GlobalSelling\GlobalSellingParameter;

/**
 * @property string plain_text
 */
class Description extends GlobalSellingParameter
{
	public function __construct($data = [])
	{
		parent::__construct($data, array(
			'plain_text'         => [self::PARAM_TYPE_STRING, self::PARAM_ISSET],
		));
	}
}
