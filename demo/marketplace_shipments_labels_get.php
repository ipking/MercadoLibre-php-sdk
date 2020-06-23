<?php

use MercadoLibre\GlobalSelling\MarketplaceShipmentsLabelsGet\MarketplaceShipmentsLabelsGetClient;
use MercadoLibre\GlobalSelling\MarketplaceShipmentsLabelsGet\MarketplaceShipmentsLabelsGetParameter;

include 'config.php';

$param = new MarketplaceShipmentsLabelsGetParameter();
$param->shipment_id = '';

$client = new MarketplaceShipmentsLabelsGetClient($param);
$client->setAccessToken($access_token);
$rsp = $client->send();

if($rsp->isSuccess()){
	print_r($rsp->getData());
} else {
	die($rsp->msg);
}