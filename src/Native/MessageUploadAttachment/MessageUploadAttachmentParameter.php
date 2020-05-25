<?php


namespace MercadoLibre\Native\MessageUploadAttachment;

use MercadoLibre\Native\NativeParameter;

/**
 * @property String file
 */
class MessageUploadAttachmentParameter extends NativeParameter
{
	public function __construct($data = [])
	{
		parent::__construct($data, array(
			'file' => [self::PARAM_TYPE_STRING, self::PARAM_REQUIRED],
		));
	}
}