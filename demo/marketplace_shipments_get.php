<?php

use MercadoLibre\GlobalSelling\MarketplaceShipmentsGet\MarketplaceShipmentsGetClient;
use MercadoLibre\GlobalSelling\MarketplaceShipmentsGet\MarketplaceShipmentsGetParameter;

include 'config.php';

$param = new MarketplaceShipmentsGetParameter();
$param->shipment_id = '';

$client = new MarketplaceShipmentsGetClient($param);
$client->setAccessToken($access_token);
$rsp = $client->send();

if($rsp->isSuccess()){
	print_r($rsp->getData());
} else {
	die($rsp->msg);
}