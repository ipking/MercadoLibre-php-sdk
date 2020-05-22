<?php


namespace MercadoLibre\Native\UploadClaimAttachment;

use MercadoLibre\Native\NativeParameter;

/**
 * @property String claim_id
 * @property String file
 */
class UploadClaimAttachmentParameter extends NativeParameter
{
	public function __construct($data = [])
	{
		parent::__construct($data, array(
			'claim_id' => [self::PARAM_TYPE_STRING, self::PARAM_REQUIRED],
			'file'     => [self::PARAM_TYPE_STRING, self::PARAM_REQUIRED],
		));
	}
}