<?php

namespace MercadoLibre\NativeSelling\ItemsPost\Model;


use MercadoLibre\Base\BaseParameter;

/**
 * @property string source 图片地址
 */
class Picture extends BaseParameter
{
	public function __construct($data = [])
	{
		parent::__construct($data, array(
			'source'           => [self::PARAM_TYPE_STRING, self::PARAM_REQUIRED],
		));
	}
}