<?php


namespace MercadoLibre\NativeSelling\ClaimsMessagesPost;

use MercadoLibre\Base\BaseParameter;

/**
 * @property String claim_id
 * @property String receiver_role
 * @property String message
 * @property array attachments
 */
class ClaimsMessagesPostParameter extends BaseParameter
{
	public function __construct($data = [])
	{
		parent::__construct($data, array(
			'claim_id'      => [self::PARAM_TYPE_STRING, self::PARAM_REQUIRED],
			'receiver_role' => [self::PARAM_TYPE_STRING, self::PARAM_REQUIRED],
			'message'       => [self::PARAM_TYPE_STRING, self::PARAM_REQUIRED],
			'attachments'   => [self::PARAM_TYPE_ARRAY, self::PARAM_ISSET,self::PARAM_TYPE_STRING],
		));
	}
}