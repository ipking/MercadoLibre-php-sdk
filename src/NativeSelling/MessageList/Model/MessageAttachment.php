<?php

namespace MercadoLibre\NativeSelling\MessageList\Model;


use MercadoLibre\NativeSelling\NativeSellingParameter;
/**
 * @property string filename
 * @property string original_filename
 * @property string type
 * @property string size
 * @property string potential_security_threat
 * @property string creation_date
 */
class MessageAttachment extends NativeSellingParameter
{
	public function __construct($data = [])
	{
		
		parent::__construct($data, array(
			'filename'                  => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'original_filename'         => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'type'                      => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'size'                      => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'potential_security_threat' => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'creation_date'             => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
		));
	}
}
