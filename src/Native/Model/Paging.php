<?php

namespace MercadoLibre\Native\Model;



use MercadoLibre\Native\NativeParameter;

/**
 * @property string limit
 * @property string offset
 * @property string total
 */
class Paging extends NativeParameter
{
	public function __construct($data = [])
	{
		parent::__construct($data, array(
			'limit'  => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'offset' => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'total'  => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
		));
	}
}