<?php

include 'config.php';

$param = new \MercadoLibre\NativeSelling\OrdersGet\OrdersGetParameter();
$param->order_id = '';

$client = new \MercadoLibre\NativeSelling\OrdersGet\OrdersGetClient($param);
$client->setAccessToken($access_token);
$rsp = $client->send();

if($rsp->isSuccess()){
	print_r($rsp->order);
} else {
	die($rsp->msg);
}