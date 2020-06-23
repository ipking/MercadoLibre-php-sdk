<?php

use MercadoLibre\GlobalSelling\MarketplaceShipmentsTrackingPost\MarketplaceShipmentsTrackingPostClient;
use MercadoLibre\GlobalSelling\MarketplaceShipmentsTrackingPost\MarketplaceShipmentsTrackingPostParameter;

include 'config.php';

$param = new MarketplaceShipmentsTrackingPostParameter();
$param->shipment_id = '';
$param->tracking_id = '';
$param->tracking_url = '';
$param->carrier = '';

$client = new MarketplaceShipmentsTrackingPostClient($param);
$client->setAccessToken($access_token);
$rsp = $client->send();

if($rsp->isSuccess()){
	print_r($rsp->getData());
} else {
	die($rsp->msg);
}