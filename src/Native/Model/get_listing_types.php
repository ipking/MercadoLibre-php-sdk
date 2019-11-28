<?php

use MercadoLibre\Native\Model\SiteEnum;

include 'SiteEnum.php';

$list = [];
foreach(SiteEnum::$NAME_MAP as $site=>$name){
	try{
		$datas = json_decode(file_get_contents('https://api.mercadolibre.com/sites/'.$site.'/listing_types'),1);
		
		foreach($datas as $item){
			$list[$site][] = $item['id'];
		}
	}catch(Exception $e){
		//do noting
	}
	
}
