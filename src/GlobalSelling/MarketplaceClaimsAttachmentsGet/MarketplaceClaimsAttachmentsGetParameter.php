<?php


namespace MercadoLibre\GlobalSelling\MarketplaceClaimsAttachmentsGet;

use MercadoLibre\Base\BaseParameter;

/**
 * @property String claim_id
 * @property String attach_id
 */
class MarketplaceClaimsAttachmentsGetParameter extends BaseParameter
{
	public function __construct($data = [])
	{
		parent::__construct($data, array(
			'claim_id'  => [self::PARAM_TYPE_STRING, self::PARAM_REQUIRED],
			'attach_id' => [self::PARAM_TYPE_STRING, self::PARAM_REQUIRED],
		));
	}
}