<?php

include 'config.php';

$param = new \MercadoLibre\NativeSelling\ItemsGet\ItemsGetParameter();
$param->item_id = '';

$client = new \MercadoLibre\NativeSelling\ItemsGet\ItemsGetClient($param);
$client->setAccessToken($access_token);
$rsp = $client->send();

if($rsp->isSuccess()){
	print_r($rsp->getDataAsArray());
} else {
	die($rsp->msg);
}