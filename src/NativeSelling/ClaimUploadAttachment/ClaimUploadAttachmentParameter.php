<?php


namespace MercadoLibre\NativeSelling\ClaimUploadAttachment;

use MercadoLibre\NativeSelling\NativeSellingParameter;

/**
 * @property String claim_id
 * @property String file
 */
class ClaimUploadAttachmentParameter extends NativeSellingParameter
{
	public function __construct($data = [])
	{
		parent::__construct($data, array(
			'claim_id' => [self::PARAM_TYPE_STRING, self::PARAM_REQUIRED],
			'file'     => [self::PARAM_TYPE_STRING, self::PARAM_REQUIRED],
		));
	}
}