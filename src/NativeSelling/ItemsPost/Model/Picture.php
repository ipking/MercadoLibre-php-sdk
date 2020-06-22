<?php

namespace MercadoLibre\NativeSelling\ItemsPost\Model;


use MercadoLibre\NativeSelling\NativeSellingParameter;

/**
 * @property string source 图片地址
 */
class Picture extends NativeSellingParameter
{
	public function __construct($data = [])
	{
		parent::__construct($data, array(
			'source'           => [self::PARAM_TYPE_STRING, self::PARAM_REQUIRED],
		));
	}
}