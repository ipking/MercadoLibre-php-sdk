<?php

use MercadoLibre\GlobalSelling\MarketplaceItemsPost\MarketplaceItemsPostClient;
use MercadoLibre\GlobalSelling\MarketplaceItemsPost\MarketplaceItemsPostParameter;

include 'config.php';

$param = new MarketplaceItemsPostParameter();
$param->item_id = 'CBT';

$sites = [
	'MLB',
];

$configs = [];
foreach($sites as $site){
    $config = new \MercadoLibre\GlobalSelling\MarketplaceItemsPost\Model\Config();
    $config->site_id = $site;
    $config->logistic_type = 'remote';
    $config->price = 38;
    $configs[] = $config;
}
$param->config = $configs;
$client = new MarketplaceItemsPostClient($param);
$client->setAccessToken($access_token);
$rsp = $client->send();

if($rsp->isSuccess()){
	print_r($rsp->getData());
} else {
	die($rsp->msg);
}