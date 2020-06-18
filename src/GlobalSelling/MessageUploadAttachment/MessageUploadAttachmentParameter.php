<?php


namespace MercadoLibre\GlobalSelling\MessageUploadAttachment;

use MercadoLibre\GlobalSelling\GlobalSellingParameter;

/**
 * @property String file
 */
class MessageUploadAttachmentParameter extends GlobalSellingParameter
{
	public function __construct($data = [])
	{
		parent::__construct($data, array(
			'file' => [self::PARAM_TYPE_STRING, self::PARAM_REQUIRED],
		));
	}
}