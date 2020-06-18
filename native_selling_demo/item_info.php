<?php

include 'config.php';

$param = new \MercadoLibre\NativeSelling\ItemInfo\ItemInfoParameter();
$param->item_id = '';

$client = new \MercadoLibre\NativeSelling\ItemInfo\ItemInfoClient($param);
$client->setAccessToken($access_token);
$rsp = $client->send();

if($rsp->isSuccess()){
	print_r($rsp->getDataAsArray());
} else {
	die($rsp->msg);
}