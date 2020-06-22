<?php

use MercadoLibre\GlobalSelling\ItemsGet\ItemsGetClient;
use MercadoLibre\GlobalSelling\ItemsGet\ItemsGetParameter;

include 'config.php';

$param = new ItemsGetParameter();
$param->item_id = '';

$client = new ItemsGetClient($param);
$client->setAccessToken($access_token);
$rsp = $client->send();

if($rsp->isSuccess()){
	print_r($rsp->getData());
} else {
	die($rsp->msg);
}