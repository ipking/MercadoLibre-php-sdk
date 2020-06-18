<?php


namespace MercadoLibre\NativeSelling\MessageUploadAttachment;

use MercadoLibre\NativeSelling\NativeSellingParameter;

/**
 * @property String file
 */
class MessageUploadAttachmentParameter extends NativeSellingParameter
{
	public function __construct($data = [])
	{
		parent::__construct($data, array(
			'file' => [self::PARAM_TYPE_STRING, self::PARAM_REQUIRED],
		));
	}
}