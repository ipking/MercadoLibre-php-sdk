<?php

namespace MercadoLibre\GlobalSelling\MessageList\Model;


use MercadoLibre\GlobalSelling\GlobalSellingParameter;
/**
 * @property string id
 * @property string name
 */
class MessageResource extends GlobalSellingParameter
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
