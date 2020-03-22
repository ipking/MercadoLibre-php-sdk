<?php
/**
 * 产品图片的参数
 */

namespace MercadoLibre\Native\Pictures;

use MercadoLibre\Native\NativeParameter;

/**
 * @property String picture_id
 */
class PicturesParameter extends NativeParameter
{
	public function __construct($data = [])
	{
		parent::__construct($data, array(
			'picture_id' => [self::PARAM_TYPE_STRING, self::PARAM_REQUIRED],
		));
	}
}