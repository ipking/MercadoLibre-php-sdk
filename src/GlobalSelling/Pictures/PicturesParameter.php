<?php
/**
 * 产品图片的参数
 */

namespace MercadoLibre\GlobalSelling\Pictures;

use MercadoLibre\GlobalSelling\GlobalSellingParameter;

/**
 * @property String picture_id
 */
class PicturesParameter extends GlobalSellingParameter
{
	public function __construct($data = [])
	{
		parent::__construct($data, array(
			'picture_id' => [self::PARAM_TYPE_STRING, self::PARAM_REQUIRED],
		));
	}
}