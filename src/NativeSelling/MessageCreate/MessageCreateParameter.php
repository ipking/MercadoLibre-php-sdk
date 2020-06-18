<?php


namespace MercadoLibre\NativeSelling\MessageCreate;

use MercadoLibre\NativeSelling\MessageCreate\Model\From;
use MercadoLibre\NativeSelling\MessageCreate\Model\To;
use MercadoLibre\NativeSelling\NativeSellingParameter;

/**
 * @property String pack_id
 * @property String seller_id
 * @property From from
 * @property To to
 * @property String text
 * @property array attachments
 */
class MessageCreateParameter extends NativeSellingParameter
{
	public function __construct($data = [])
	{
		parent::__construct($data, array(
			'pack_id'     => [self::PARAM_TYPE_STRING, self::PARAM_REQUIRED],
			'seller_id'   => [self::PARAM_TYPE_STRING, self::PARAM_REQUIRED],
			'from'        => [self::PARAM_TYPE_OBJECT, self::PARAM_REQUIRED, From::class],
			'to'          => [self::PARAM_TYPE_OBJECT, self::PARAM_REQUIRED, To::class],
			'text'        => [self::PARAM_TYPE_STRING, self::PARAM_REQUIRED],
			'attachments' => [self::PARAM_TYPE_ARRAY, self::PARAM_ISSET, self::PARAM_TYPE_STRING],
		));
	}
}