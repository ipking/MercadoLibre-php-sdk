<?php

namespace MercadoLibre\NativeSelling\ItemCreate\Model;

class ConditionEnum{
	const CONDITION_NEW = 'new';
	const CONDITION_USED = 'used';
	const CONDITION_NOT_SPECIFIED = 'not_specified';
	
	public static $NAME_MAP = array(
		self::CONDITION_NEW  => 'new',
		self::CONDITION_USED  => 'used',
		self::CONDITION_NOT_SPECIFIED  => 'not_specified',
	);
}

