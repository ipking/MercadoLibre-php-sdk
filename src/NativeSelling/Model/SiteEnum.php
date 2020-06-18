<?php

namespace MercadoLibre\NativeSelling\Model;

class SiteEnum{
	const SITE_CBT = 'CBT';
	const SITE_MLA = 'MLA';
	const SITE_MLB = 'MLB';
	const SITE_MCO = 'MCO';
	const SITE_MCR = 'MCR';
	const SITE_MEC = 'MEC';
	const SITE_MLC = 'MLC';
	const SITE_MLM = 'MLM';
	const SITE_MLU = 'MLU';
	const SITE_MLV = 'MLV';
	const SITE_MPA = 'MPA';
	const SITE_MPE = 'MPE';
	const SITE_MRD = 'MRD';
	const SITE_MPT = 'MPT';

	public static $NAME_MAP = array(
		self::SITE_CBT  => '国际站',
		self::SITE_MLA  => '阿根廷',
		self::SITE_MLB  => '布拉西尔',
		self::SITE_MCO  => '哥伦比亚',
		self::SITE_MCR  => '哥斯达黎加',
		self::SITE_MEC  => '厄瓜多尔',
		self::SITE_MLC  => '智利',
		self::SITE_MLM  => '墨西哥',
		self::SITE_MLU  => '乌拉圭',
		self::SITE_MLV  => '委内瑞拉',
		self::SITE_MPA  => '巴拿马',
		self::SITE_MPE  => '秘鲁',
		self::SITE_MRD  => '多米尼加',
		self::SITE_MPT  => '葡萄牙',
	);
	
	public static $AUTH_URL = array(
		self::SITE_CBT => "https://global-selling.mercadolibre.com", // CBT
		self::SITE_MLA => "https://auth.mercadolibre.com.ar", // Argentina
		self::SITE_MLB => "https://auth.mercadolivre.com.br", // Brasil
		self::SITE_MCO => "https://auth.mercadolibre.com.co", // Colombia
		self::SITE_MCR => "https://auth.mercadolibre.com.cr", // Costa Rica
		self::SITE_MEC => "https://auth.mercadolibre.com.ec", // Ecuador
		self::SITE_MLC => "https://auth.mercadolibre.cl", // Chile
		self::SITE_MLM => "https://auth.mercadolibre.com.mx", // Mexico
		self::SITE_MLU => "https://auth.mercadolibre.com.uy", // Uruguay
		self::SITE_MLV => "https://auth.mercadolibre.com.ve", // Venezuela
		self::SITE_MPA => "https://auth.mercadolibre.com.pa", // Panama
		self::SITE_MPE => "https://auth.mercadolibre.com.pe", // Peru
		self::SITE_MRD => "https://auth.mercadolibre.com.do",  // Dominicana
		self::SITE_MPT => "https://auth.mercadolibre.com.pt", // Prtugal
	);
}