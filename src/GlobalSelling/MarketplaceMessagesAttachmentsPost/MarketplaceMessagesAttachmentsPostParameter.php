<?php


namespace MercadoLibre\GlobalSelling\MarketplaceMessagesAttachmentsPost;

use MercadoLibre\Base\BaseParameter;

/**
 * @property String file
 */
class MarketplaceMessagesAttachmentsPostParameter extends BaseParameter
{
	public function __construct($data = [])
	{
		parent::__construct($data, array(
			'file' => [self::PARAM_TYPE_STRING, self::PARAM_REQUIRED],
		));
	}
}