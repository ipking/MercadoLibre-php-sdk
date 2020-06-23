<?php

use MercadoLibre\GlobalSelling\MarketplaceItemsPut\MarketplaceItemsPutClient;
use MercadoLibre\GlobalSelling\MarketplaceItemsPut\MarketplaceItemsPutParameter;

include 'config.php';

$param = new MarketplaceItemsPutParameter();
$param->item_id = '';
$param->site_id = 'MLM';
$param->logistic_type = 'remote';

$description = new \MercadoLibre\GlobalSelling\MarketplaceItemsPost\Model\Description();
$description->plain_text = 'test';
$param->description = $description;


$client = new MarketplaceItemsPutClient($param);
$client->setAccessToken($access_token);
$rsp = $client->send();

if($rsp->isSuccess()){
	print_r($rsp->getData());
} else {
	die($rsp->msg);
}