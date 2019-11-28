<?php

namespace MercadoLibre\Native\ItemCreate\Model;

class ConditionEnum{
	const CONDITION_NEW = 'new';
	const CONDITION_USED = 'used';
	const CONDITION_NOT_SPECIFIED = 'not_specified';
	
	public static $NAME_MAP = array(
		self::CONDITION_NEW  => '新品',
		self::CONDITION_USED  => '二手',
		self::CONDITION_NOT_SPECIFIED  => '未标明',
	);
}

