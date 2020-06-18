<?php

use MercadoLibre\NativeSelling\ItemCreate\Model\AttributesParameter;
use MercadoLibre\NativeSelling\ItemCreate\Model\ConditionEnum;
use MercadoLibre\NativeSelling\ItemCreate\Model\PicturesParameter;
use MercadoLibre\NativeSelling\ItemCreate\Model\VariationsParameter;
use MercadoLibre\NativeSelling\Model\CurrencyEnum;
use MercadoLibre\NativeSelling\Model\ListingTypesEnum;

include 'config.php';


$param = new \MercadoLibre\NativeSelling\ItemCreate\ItemCreateParameter();
$param->condition = ConditionEnum::CONDITION_NEW;
$param->currency_id = CurrencyEnum::CURRENCY_USD;
$param->accepts_mercadopago = true;
$param->description = 'test';
$param->listing_type_id = ListingTypesEnum::TYPE_GOLD_PRO;
$param->title = 'test';
$param->site_id = 'CBT';
$param->available_quantity = '1';
$param->price = '1000';
$param->buying_mode = 'buy_it_now';
$param->category_id = 'CBT1064';
$pics = [
	'https://mlm-s1-p.mlstatic.com/62.jpg',
	'https://mlm-s1-p.mlstatic.com/82.jpg',
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
		'value_name'=>'T3246',
	],
	[
		'id'=>'COLOR',
		'value_name'=>'Golden',
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

$client = new \MercadoLibre\NativeSelling\ItemCreate\ItemCreateClient($param);
$client->setAccessToken($access_token);
$rsp = $client->send();

if($rsp->isSuccess()){
	print_r($rsp->getDataAsArray());
} else {
	die($rsp->msg);
}