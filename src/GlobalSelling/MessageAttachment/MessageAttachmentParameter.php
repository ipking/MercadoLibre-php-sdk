<?php


namespace MercadoLibre\GlobalSelling\MessageAttachment;

use MercadoLibre\GlobalSelling\GlobalSellingParameter;

/**
 * @property String attachment_id
 */
class MessageAttachmentParameter extends GlobalSellingParameter
{
	public function __construct($data = [])
	{
		parent::__construct($data, array(
			'attachment_id' => [self::PARAM_TYPE_STRING, self::PARAM_REQUIRED],
		));
	}
}