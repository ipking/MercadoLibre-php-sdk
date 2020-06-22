<?php


namespace MercadoLibre\NativeSelling\MessagesAttachmentsPost;

use MercadoLibre\NativeSelling\NativeSellingParameter;

/**
 * @property String file
 */
class MessagesAttachmentsPostParameter extends NativeSellingParameter
{
	public function __construct($data = [])
	{
		parent::__construct($data, array(
			'file' => [self::PARAM_TYPE_STRING, self::PARAM_REQUIRED],
		));
	}
}