<?php

namespace MercadoLibre\Native\ItemCreate;

class ItemCreateErrorCode{
	const CODE_1001= '1001';
	
	static $codeMessageMap = array(
		self::CODE_1001  => '系统繁忙，请稍后再试或联系我们',
	);
	
}