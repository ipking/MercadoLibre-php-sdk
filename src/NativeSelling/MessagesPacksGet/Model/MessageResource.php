<?php

namespace MercadoLibre\NativeSelling\MessagesPacksGet\Model;


use MercadoLibre\Base\BaseParameter;

/**
 * @property string id
 * @property string name
 */
class MessageResource extends BaseParameter
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
