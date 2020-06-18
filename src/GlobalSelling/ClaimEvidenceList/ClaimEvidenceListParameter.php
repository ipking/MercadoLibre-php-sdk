<?php


namespace MercadoLibre\GlobalSelling\ClaimEvidenceList;

use MercadoLibre\GlobalSelling\GlobalSellingParameter;

/**
 * @property String claim_id
 */
class ClaimEvidenceListParameter extends GlobalSellingParameter
{
	public function __construct($data = [])
	{
		parent::__construct($data, array(
			'claim_id'       => [self::PARAM_TYPE_STRING, self::PARAM_REQUIRED],
		));
	}
}













