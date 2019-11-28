<?php

namespace MercadoLibre\Native\Model;

class ListingTypesEnum{
	const TYPE_GOLD_PRO = 'gold_pro';
	const TYPE_GOLD_PREMIUM = 'gold_premium';
	const TYPE_GOLD_SPECIAL = 'gold_special';
	const TYPE_GOLD = 'gold';
	const TYPE_SILVER = 'silver';
	const TYPE_BRONZE = 'bronze';
	const TYPE_FREE = 'free';

	public static $NAME_MAP = array(
		self::TYPE_GOLD_PRO     => 'gold_pro',
		self::TYPE_GOLD_PREMIUM => 'gold_premium',
		self::TYPE_GOLD_SPECIAL => 'gold_special',
		self::TYPE_GOLD         => 'gold',
		self::TYPE_SILVER       => 'silver',
		self::TYPE_BRONZE       => 'bronze',
		self::TYPE_FREE         => 'free',

	);
}