<?php


namespace MercadoLibre\Native\ClaimUploadAttachment;

use MercadoLibre\Native\NativeParameter;

/**
 * @property String claim_id
 * @property String file
 */
class ClaimUploadAttachmentParameter extends NativeParameter
{
	public function __construct($data = [])
	{
		parent::__construct($data, array(
			'claim_id' => [self::PARAM_TYPE_STRING, self::PARAM_REQUIRED],
			'file'     => [self::PARAM_TYPE_STRING, self::PARAM_REQUIRED],
		));
	}
}