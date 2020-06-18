<?php

include 'config.php';

$param = new \MercadoLibre\GlobalSelling\ItemInfo\ItemInfoParameter();
$param->item_id = '';

$client = new \MercadoLibre\GlobalSelling\ItemInfo\ItemInfoClient($param);
$client->setAccessToken($access_token);
$rsp = $client->send();

if($rsp->isSuccess()){
	print_r($rsp->getDataAsArray());
} else {
	die($rsp->msg);
}