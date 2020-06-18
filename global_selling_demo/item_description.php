<?php

include 'config.php';

$param = new \MercadoLibre\GlobalSelling\ItemDescription\ItemDescriptionParameter();
$param->item_id = '';

$client = new \MercadoLibre\GlobalSelling\ItemDescription\ItemDescriptionClient($param);
//$client->setAccessToken($access_token); //可以不用token
$rsp = $client->send();

if($rsp->isSuccess()){
	print_r($rsp->getDataAsArray());
} else {
	die($rsp->msg);
}

