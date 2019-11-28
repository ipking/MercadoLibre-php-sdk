<?php

namespace MercadoLibre\Native\ItemCreate\Model;


use MercadoLibre\Native\NativeParameter;
/**
 * @property string source 图片地址
 */
class PicturesParameter extends NativeParameter
{
	public function __construct($data = [])
	{
		parent::__construct($data, array(
			'source'           => [self::PARAM_TYPE_STRING, self::PARAM_REQUIRED],
		));
	}
}