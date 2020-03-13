<?php

use MercadoLibre\Native\ItemCreate\Model\AttributesParameter;
use MercadoLibre\Native\ItemCreate\Model\ConditionEnum;
use MercadoLibre\Native\ItemCreate\Model\PicturesParameter;
use MercadoLibre\Native\ItemCreate\Model\VariationsParameter;
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
$param->price = '1000';
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
$attrs = [
	[
		'id'=>'BRAND',
		'value_name'=>'YK',
	],
	[
		'id'=>'MODEL',
		'value_name'=>'TK3246',
	],
	[
		'id'=>'COLOR',
		'value_id'=>'52049',
	],
];
$attr = [];

$a = $attrs[0];
$p = new AttributesParameter();
$p->id = $a['id'];
$p->value_id = $a['value_id'];
$p->value_name = $a['value_name'];
$attr[] = $p;

$a = $attrs[1];
$p = new AttributesParameter();
$p->id = $a['id'];
$p->value_id = $a['value_id'];
$p->value_name = $a['value_name'];
$attr[] = $p;

$a = $attrs[2];
$p = new AttributesParameter();
$p->id = $a['id'];
$p->value_id = $a['value_id'];
$p->value_name = $a['value_name'];


$param->attributes = $attr;

$variations = new VariationsParameter();
$variations->available_quantity = 1;
$variations->price = 1000;
$variations->seller_custom_field = 'sku001';
$variations->attribute_combinations = [$p];
$variations->picture_ids = $pics;

$param->variations = [$variations];

$param->warranty = '12 months';

$client = new \MercadoLibre\Native\ItemCreate\ItemCreateClient($param);
$client->setAccessToken($access_token);
$rsp = $client->send();

if($rsp->isSuccess()){
	print_r($rsp->getDataAsArray());
} else {
	die($rsp->msg);
}