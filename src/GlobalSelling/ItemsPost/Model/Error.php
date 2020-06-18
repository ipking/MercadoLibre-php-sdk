<?php

namespace MercadoLibre\GlobalSelling\ItemsPost\Model;

use MercadoLibre\NativeSelling\NativeSellingParameter;

/**
 * @property string message
 * @property string error
 * @property string status
 */
class Error extends NativeSellingParameter
{
	public function __construct($data = [])
	{
		parent::__construct($data, array(
			'message' => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'error'   => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'status'  => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
		));
	}
}
