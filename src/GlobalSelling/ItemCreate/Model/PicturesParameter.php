<?php

namespace MercadoLibre\GlobalSelling\ItemCreate\Model;


use MercadoLibre\GlobalSelling\GlobalSellingParameter;
/**
 * @property string source 图片地址
 */
class PicturesParameter extends GlobalSellingParameter
{
	public function __construct($data = [])
	{
		parent::__construct($data, array(
			'source'           => [self::PARAM_TYPE_STRING, self::PARAM_REQUIRED],
		));
	}
}