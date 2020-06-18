<?php


namespace MercadoLibre\GlobalSelling\ClaimAttachment;

use MercadoLibre\GlobalSelling\GlobalSellingParameter;

/**
 * @property String claim_id
 * @property String attach_id
 */
class ClaimAttachmentParameter extends GlobalSellingParameter
{
	public function __construct($data = [])
	{
		parent::__construct($data, array(
			'claim_id'  => [self::PARAM_TYPE_STRING, self::PARAM_REQUIRED],
			'attach_id' => [self::PARAM_TYPE_STRING, self::PARAM_REQUIRED],
		));
	}
}