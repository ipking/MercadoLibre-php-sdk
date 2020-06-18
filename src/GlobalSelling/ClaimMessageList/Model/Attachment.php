<?php

namespace MercadoLibre\GlobalSelling\ClaimMessageList\Model;


use MercadoLibre\GlobalSelling\GlobalSellingParameter;
/**
 * @property string filename
 * @property string original_filename
 * @property string size
 * @property string type
 * @property string date_created
 */
class Attachment extends GlobalSellingParameter
{
	public function __construct($data = [])
	{
		parent::__construct($data, array(
			'filename'          => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'original_filename' => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'size'              => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'type'              => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'date_created'      => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
		));
	}
}
