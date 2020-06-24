<?php

use MercadoLibre\GlobalSelling\ItemsMarketplaceItemsGet\ItemsMarketplaceItemsGetClient;
use MercadoLibre\GlobalSelling\ItemsMarketplaceItemsGet\ItemsMarketplaceItemsGetParameter;

include 'config.php';

$param = new ItemsMarketplaceItemsGetParameter();
$param->item_id = '';

$client = new ItemsMarketplaceItemsGetClient($param);
$client->setAccessToken($access_token);
$rsp = $client->send();

if($rsp->isSuccess()){
	print_r($rsp->getData());
} else {
	die($rsp->msg);
}