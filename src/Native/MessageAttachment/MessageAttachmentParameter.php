<?php


namespace MercadoLibre\Native\MessageAttachment;

use MercadoLibre\Native\NativeParameter;

/**
 * @property String attachment_id
 */
class MessageAttachmentParameter extends NativeParameter
{
	public function __construct($data = [])
	{
		parent::__construct($data, array(
			'attachment_id' => [self::PARAM_TYPE_STRING, self::PARAM_REQUIRED],
		));
	}
}