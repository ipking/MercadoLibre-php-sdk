<?php

include 'config.php';

$param = new \MercadoLibre\GlobalSelling\ClaimList\ClaimListParameter();
$param->order_id = '';

$client = new \MercadoLibre\GlobalSelling\ClaimList\ClaimListClient($param);
$client->setAccessToken($access_token);
$rsp = $client->send();

if($rsp->isSuccess()){
	print_r($rsp->claims);
	var_dump($rsp->paging->total);
} else {
	die($rsp->msg);
}