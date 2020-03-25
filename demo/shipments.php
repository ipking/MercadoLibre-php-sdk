<?php

include 'config.php';

$param = new \MercadoLibre\Native\Shipments\ShipmentsParameter();
$param->shipment_id = '1225234';//from   order.shipping.id

$client = new \MercadoLibre\Native\Shipments\ShipmentsClient($param);
$client->setAccessToken($access_token);

$json =<<<EOL
{
     "tracking_number": "TR1234567891",
     "status": "shipped"
}
EOL;


$client->setPutData(json_decode($json,1));

$rsp = $client->send();

if($rsp->isSuccess()){
	print_r($rsp->getDataAsArray());
} else {
	die($rsp->msg);
}

