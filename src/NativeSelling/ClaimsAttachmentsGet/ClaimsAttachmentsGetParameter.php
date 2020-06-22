<?php


namespace MercadoLibre\NativeSelling\ClaimsAttachmentsGet;

use MercadoLibre\Base\BaseParameter;

/**
 * @property String claim_id
 * @property String attach_id
 */
class ClaimsAttachmentsGetParameter extends BaseParameter
{
	public function __construct($data = [])
	{
		parent::__construct($data, array(
			'claim_id'  => [self::PARAM_TYPE_STRING, self::PARAM_REQUIRED],
			'attach_id' => [self::PARAM_TYPE_STRING, self::PARAM_REQUIRED],
		));
	}
}