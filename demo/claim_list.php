<?php

include 'config.php';

$param = new \MercadoLibre\NativeSelling\ClaimsSearchGet\ClaimsSearchGetParameter();
$param->order_id = '';

$client = new \MercadoLibre\NativeSelling\ClaimsSearchGet\ClaimsSearchGetClient($param);
$client->setAccessToken($access_token);
$rsp = $client->send();

if($rsp->isSuccess()){
	print_r($rsp->claims);
	var_dump($rsp->paging->total);
} else {
	die($rsp->msg);
}