<?php


namespace MercadoLibre\GlobalSelling\MarketplaceMessagesPost;

use MercadoLibre\GlobalSelling\MarketplaceMessagesPost\Model\From;
use MercadoLibre\GlobalSelling\MarketplaceMessagesPost\Model\To;
use MercadoLibre\Base\BaseParameter;

/**
 * @property String pack_id
 * @property From from
 * @property To to
 * @property String text
 * @property String text_traslated
 * @property array attachments
 */
class MarketplaceMessagesPostParameter extends BaseParameter
{
	public function __construct($data = [])
	{
		parent::__construct($data, array(
			'pack_id'        => [self::PARAM_TYPE_STRING, self::PARAM_REQUIRED],
			'from'           => [self::PARAM_TYPE_OBJECT, self::PARAM_REQUIRED, From::class],
			'to'             => [self::PARAM_TYPE_OBJECT, self::PARAM_REQUIRED, To::class],
			'text'           => [self::PARAM_TYPE_STRING, self::PARAM_REQUIRED],
			'text_traslated' => [self::PARAM_TYPE_STRING, self::PARAM_ISSET],
			'attachments'    => [self::PARAM_TYPE_ARRAY, self::PARAM_ISSET, self::PARAM_TYPE_STRING],
		));
	}
}
