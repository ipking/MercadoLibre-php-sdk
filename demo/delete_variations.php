<?php

include 'config.php';

$param = new \MercadoLibre\NativeSelling\ItemsVariationsDelete\ItemsVariationsDeleteParameter();
$param->item_id = '';
$param->variations_id = '';

$client = new \MercadoLibre\NativeSelling\ItemsVariationsDelete\ItemsVariationsDeleteClient($param);
$client->setAccessToken($access_token);


$rsp = $client->send();

if($rsp->isSuccess()){
	print_r($rsp->getDataAsArray());
} else {
	die($rsp->msg);
}

