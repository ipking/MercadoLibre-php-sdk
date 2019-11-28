<?php

namespace MercadoLibre\Native\Model;

class CurrencyEnum{
	const CURRENCY_MXN = 'MXN';
	const CURRENCY_ARS = 'ARS';
	const CURRENCY_BRL = 'BRL';

	public static $NAME_MAP = array(
		self::CURRENCY_MXN  => '墨西哥比索',
		self::CURRENCY_ARS  => '阿根廷比索',
		self::CURRENCY_BRL  => '巴西雷亚尔',
	);
}
