<?php


namespace MercadoLibre\GlobalSelling\ClaimUploadAttachment;

use MercadoLibre\GlobalSelling\GlobalSellingParameter;

/**
 * @property String claim_id
 * @property String file
 */
class ClaimUploadAttachmentParameter extends GlobalSellingParameter
{
	public function __construct($data = [])
	{
		parent::__construct($data, array(
			'claim_id' => [self::PARAM_TYPE_STRING, self::PARAM_REQUIRED],
			'file'     => [self::PARAM_TYPE_STRING, self::PARAM_REQUIRED],
		));
	}
}