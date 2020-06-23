<?php

use MercadoLibre\GlobalSelling\MarketplaceItemsGet\MarketplaceItemsGetClient;
use MercadoLibre\GlobalSelling\MarketplaceItemsGet\MarketplaceItemsGetParameter;

include 'config.php';

$param = new MarketplaceItemsGetParameter();
$param->item_id = '';

$client = new MarketplaceItemsGetClient($param);
$client->setAccessToken($access_token);
$rsp = $client->send();

if($rsp->isSuccess()){
	print_r($rsp->getData());
} else {
	die($rsp->msg);
}