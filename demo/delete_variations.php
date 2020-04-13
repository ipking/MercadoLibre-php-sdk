<?php

include 'config.php';

$param = new \MercadoLibre\Native\DeleteVariations\DeleteVariationsParameter();
$param->item_id = '';
$param->variations_id = '';

$client = new \MercadoLibre\Native\DeleteVariations\DeleteVariationsClient($param);
$client->setAccessToken($access_token);


$rsp = $client->send();

if($rsp->isSuccess()){
	print_r($rsp->getDataAsArray());
} else {
	die($rsp->msg);
}

