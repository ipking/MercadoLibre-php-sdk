<?php

include 'config.php';

$param = new \MercadoLibre\Native\OrderInfo\OrderInfoParameter();
$param->order_id = '';

$client = new \MercadoLibre\Native\OrderInfo\OrderInfoClient($param);
$client->setAccessToken($access_token);
$rsp = $client->send();

if($rsp->isSuccess()){
	print_r($rsp->order);
} else {
	die($rsp->msg);
}