<?php

include 'config.php';

$param = new \MercadoLibre\Native\ItemInfo\ItemInfoParameter();
$param->item_id = '';

$client = new \MercadoLibre\Native\ItemInfo\ItemInfoClient($param);
$client->setAccessToken($access_token);
$rsp = $client->send();

if($rsp->isSuccess()){
	print_r($rsp->getDataAsArray());
} else {
	die($rsp->msg);
}