<?php


namespace MercadoLibre\NativeSelling\MessageAttachment;

use MercadoLibre\NativeSelling\NativeSellingParameter;

/**
 * @property String attachment_id
 */
class MessageAttachmentParameter extends NativeSellingParameter
{
	public function __construct($data = [])
	{
		parent::__construct($data, array(
			'attachment_id' => [self::PARAM_TYPE_STRING, self::PARAM_REQUIRED],
		));
	}
}