<?php

namespace MercadoLibre\Native\OrderList\Model;


use MercadoLibre\Native\NativeParameter;
/**
 * @property string status
 */
class Shipping extends NativeParameter
{
	public function __construct($data = [])
	{
		parent::__construct($data, array(
			'status'                => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
		));
	}
}