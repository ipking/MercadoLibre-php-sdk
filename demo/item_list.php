<?php

include 'config.php';

$param = new \MercadoLibre\NativeSelling\ItemsSearchGet\ItemsSearchGetParameter();
$param->seller_id = $user_id;
$param->offset = 0;
$param->limit = 20;

$client = new \MercadoLibre\NativeSelling\ItemsSearchGet\ItemsSearchGetClient($param);
$client->setAccessToken($access_token);
$rsp = $client->send();

if($rsp->isSuccess()){
	print_r($rsp->item_ids);
	var_dump($rsp->paging->total);
} else {
	die($rsp->msg);
}