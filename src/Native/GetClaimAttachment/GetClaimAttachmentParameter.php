<?php


namespace MercadoLibre\Native\GetClaimAttachment;

use MercadoLibre\Native\NativeParameter;

/**
 * @property String claim_id
 * @property String attach_id
 */
class GetClaimAttachmentParameter extends NativeParameter
{
	public function __construct($data = [])
	{
		parent::__construct($data, array(
			'claim_id'  => [self::PARAM_TYPE_STRING, self::PARAM_REQUIRED],
			'attach_id' => [self::PARAM_TYPE_STRING, self::PARAM_REQUIRED],
		));
	}
}