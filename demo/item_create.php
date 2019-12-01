<?php

use MercadoLibre\Native\ItemCreate\Model\ConditionEnum;
use MercadoLibre\Native\ItemCreate\Model\PicturesParameter;
use MercadoLibre\Native\Model\CurrencyEnum;
use MercadoLibre\Native\Model\ListingTypesEnum;

include 'config.php';


$param = new \MercadoLibre\Native\ItemCreate\ItemCreateParameter();
$param->condition = ConditionEnum::CONDITION_NEW;
$param->currency_id = CurrencyEnum::CURRENCY_MXN;
$param->accepts_mercadopago = true;
$param->description = 'Lindo Ray_Ban_Original_Wayfarer';
$param->listing_type_id = ListingTypesEnum::TYPE_BRONZE;
$param->title = 'Audifonos Manos Libre Bluetooth';
$param->available_quantity = '1';
$param->price = '400';
$param->buying_mode = 'buy_it_now';
$param->category_id = 'MLM7533';
$pics = [
	'https://mlm-s1-p.mlstatic.com/620892-MLM32072421033_092019-O.jpg',
	'https://mlm-s1-p.mlstatic.com/822897-MLM31230257490_062019-O.jpg',
];
$ps = [];
foreach($pics as $pic){
	$p = new PicturesParameter();
	$p->source = $pic;
	$ps[] = $p;
}
$param->pictures = $ps;
$param->warranty = '';

$client = new \MercadoLibre\Native\ItemCreate\ItemCreateClient($param);
$client->setAccessToken($access_token);
$rsp = $client->send();

if($rsp->isSuccess()){
	print_r($rsp->getDataAsArray());
} else {
	die($rsp->msg);
}