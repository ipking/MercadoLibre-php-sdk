<?php

include 'config.php';

$param = new \MercadoLibre\Native\ItemList\ItemListParameter();
$param->seller_id = $user_id;
$param->offset = 0;
$param->limit = 2;

$client = new \MercadoLibre\Native\ItemList\ItemListClient($param);
$client->setAccessToken($access_token);
$rsp = $client->send();

if($rsp->isSuccess()){
	print_r($rsp->item_ids);
	var_dump($rsp->paging->total);
} else {
	die($rsp->msg);
}