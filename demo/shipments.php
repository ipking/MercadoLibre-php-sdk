<?php

include 'config.php';

$param = new \MercadoLibre\Native\Shipments\ShipmentsParameter();
$param->shipment_id = '';//from   order.shipping.id
$param->tracking_number = 'TR1234567891';
$param->status = 'shipped';
$param->speed = '';
$param->receiver_id = '';

$client = new \MercadoLibre\Native\Shipments\ShipmentsClient($param);
$client->setAccessToken($access_token);


$rsp = $client->send();

if($rsp->isSuccess()){
	print_r($rsp->getDataAsArray());
} else {
	die($rsp->msg);
}

