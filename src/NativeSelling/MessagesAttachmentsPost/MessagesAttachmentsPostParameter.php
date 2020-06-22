<?php


namespace MercadoLibre\NativeSelling\MessagesAttachmentsPost;

use MercadoLibre\Base\BaseParameter;

/**
 * @property String file
 */
class MessagesAttachmentsPostParameter extends BaseParameter
{
	public function __construct($data = [])
	{
		parent::__construct($data, array(
			'file' => [self::PARAM_TYPE_STRING, self::PARAM_REQUIRED],
		));
	}
}