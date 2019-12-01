<?php

include 'config.php';

$param = new \MercadoLibre\Native\ItemList\ItemListParameter();
$param->user_id = $user_id;

$client = new \MercadoLibre\Native\ItemList\ItemListClient($param);
$client->setAccessToken($access_token);
$rsp = $client->send();

if($rsp->isSuccess()){
	var_dump($rsp->item_ids);
} else {
	die($rsp->msg);
}