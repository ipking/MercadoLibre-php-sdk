<?php

namespace MercadoLibre\NativeSelling\MessageList\Model;


use MercadoLibre\NativeSelling\NativeSellingParameter;
/**
 * @property string id
 * @property string name
 */
class MessageResource extends NativeSellingParameter
{
	
	const NAME_PACKS = 'packs';
	const NAME_SELLERS = 'sellers';
	
	public function __construct($data = [])
	{
		
		parent::__construct($data, array(
			'id'   => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'name' => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
		));
	}
}
