<?php

include 'config.php';

$param = new \MercadoLibre\GlobalSelling\Variations\VariationsParameter();
$param->item_id = '';
$param->variation_id = '';

$client = new \MercadoLibre\GlobalSelling\Variations\VariationsClient($param);
$client->setAccessToken($access_token);
$rsp = $client->send();

if($rsp->isSuccess()){
	print_r($rsp->getDataAsArray());
} else {
	die($rsp->msg);
}