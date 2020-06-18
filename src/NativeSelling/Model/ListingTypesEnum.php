<?php

namespace MercadoLibre\NativeSelling\Model;

class ListingTypesEnum{
	const TYPE_GOLD_PRO = 'gold_pro';
	const TYPE_GOLD_SPECIAL = 'gold_special';

	public static $NAME_MAP = array(
		self::TYPE_GOLD_PRO  => 'gold_pro',
		self::TYPE_GOLD_SPECIAL  => 'gold_special',

	);
}