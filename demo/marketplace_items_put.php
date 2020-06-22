<?php

use MercadoLibre\GlobalSelling\ItemsPut\ItemsPutClient;
use MercadoLibre\GlobalSelling\ItemsPut\ItemsPutParameter;

include 'config.php';

$param = new ItemsPutParameter();
$param->item_id = '';
$param->site_id = 'MLM';
$param->logistic_type = 'remote';

$description = new \MercadoLibre\GlobalSelling\ItemsPost\Model\Description();
$description->plain_text = 'test';
$param->description = $description;


$client = new ItemsPutClient($param);
$client->setAccessToken($access_token);
$rsp = $client->send();

if($rsp->isSuccess()){
	print_r($rsp->getData());
} else {
	die($rsp->msg);
}