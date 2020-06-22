<?php


namespace MercadoLibre\NativeSelling\ClaimsAttachmentsPost;

use MercadoLibre\Base\BaseParameter;

/**
 * @property String claim_id
 * @property String file
 */
class ClaimsAttachmentsPostParameter extends BaseParameter
{
	public function __construct($data = [])
	{
		parent::__construct($data, array(
			'claim_id' => [self::PARAM_TYPE_STRING, self::PARAM_REQUIRED],
			'file'     => [self::PARAM_TYPE_STRING, self::PARAM_REQUIRED],
		));
	}
}