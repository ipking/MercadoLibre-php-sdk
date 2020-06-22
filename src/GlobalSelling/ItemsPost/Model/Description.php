<?php

namespace MercadoLibre\GlobalSelling\ItemsPost\Model;

use MercadoLibre\Base\BaseParameter;

/**
 * @property string plain_text
 */
class Description extends BaseParameter
{
	public function __construct($data = [])
	{
		parent::__construct($data, array(
			'plain_text'         => [self::PARAM_TYPE_STRING, self::PARAM_ISSET],
		));
	}
}
