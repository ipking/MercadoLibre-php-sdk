<?php

include 'config.php';

$param = new \MercadoLibre\Native\OrderList\OrderListParameter();
$param->user_id = $user_id;
$param->offset = 0;
$param->limit = 2;

$client = new \MercadoLibre\Native\OrderList\OrderListClient($param);
$client->setAccessToken($access_token);
$rsp = $client->send();

if($rsp->isSuccess()){
	var_dump($rsp->orders);
	var_dump($rsp->paging->total);
} else {
	die($rsp->msg);
}