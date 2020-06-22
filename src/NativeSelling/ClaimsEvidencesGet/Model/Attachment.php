<?php

namespace MercadoLibre\NativeSelling\ClaimsEvidencesGet\Model;


use MercadoLibre\NativeSelling\NativeSellingParameter;

/**
 * @property string filename
 * @property string original_filename
 * @property string size
 * @property string type
 * @property string date_created
 * @property string file_url
 */
class Attachment extends NativeSellingParameter
{
	public function __construct($data = [])
	{
		parent::__construct($data, array(
			'filename'          => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'original_filename' => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'size'              => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'type'              => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'date_created'      => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'file_url'          => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
		));
	}
}
