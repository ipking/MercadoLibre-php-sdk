<?php

use MercadoLibre\GlobalSelling\ItemsPost\ItemsPostClient;
use MercadoLibre\GlobalSelling\ItemsPost\ItemsPostParameter;

include 'config.php';

$param = new ItemsPostParameter();
$param->item_id = 'CBT93';

$sites = [
	'MLM',
	'MLB',
];

$configs = [];
foreach($sites as $site){
    $config = new \MercadoLibre\GlobalSelling\ItemsPost\Model\Config();
    $config->site_id = $site;
    $config->logistic_type = 'remote';
    $configs[] = $config;
}
$param->config = $configs;
$client = new ItemsPostClient($param);
$client->setAccessToken($access_token);
$rsp = $client->send();

if($rsp->isSuccess()){
	print_r($rsp->getData());
} else {
	die($rsp->msg);
}