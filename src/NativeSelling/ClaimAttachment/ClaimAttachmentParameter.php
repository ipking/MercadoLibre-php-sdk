<?php


namespace MercadoLibre\NativeSelling\ClaimAttachment;

use MercadoLibre\NativeSelling\NativeSellingParameter;

/**
 * @property String claim_id
 * @property String attach_id
 */
class ClaimAttachmentParameter extends NativeSellingParameter
{
	public function __construct($data = [])
	{
		parent::__construct($data, array(
			'claim_id'  => [self::PARAM_TYPE_STRING, self::PARAM_REQUIRED],
			'attach_id' => [self::PARAM_TYPE_STRING, self::PARAM_REQUIRED],
		));
	}
}