<?php


namespace MercadoLibre\Native\UploadMessageAttachment;

use MercadoLibre\Native\NativeParameter;

/**
 * @property String file
 */
class UploadMessageAttachmentParameter extends NativeParameter
{
	public function __construct($data = [])
	{
		parent::__construct($data, array(
			'file' => [self::PARAM_TYPE_STRING, self::PARAM_REQUIRED],
		));
	}
}