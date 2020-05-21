<?php


namespace MercadoLibre\Native\ClaimMessageList;

use MercadoLibre\Native\NativeParameter;

/**
 * @property String claim_id
 */
class ClaimMessageListParameter extends NativeParameter
{
	public function __construct($data = [])
	{
		parent::__construct($data, array(
			'claim_id'       => [self::PARAM_TYPE_STRING, self::PARAM_REQUIRED],
		));
	}
}













