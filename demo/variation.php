<?php

include 'config.php';

$param = new \MercadoLibre\Native\Variations\VariationsParameter();
$param->item_id = '';
$param->variation_id = '';

$client = new \MercadoLibre\Native\Variations\VariationsClient($param);
$client->setAccessToken($access_token);
$rsp = $client->send();

if($rsp->isSuccess()){
	print_r($rsp->getDataAsArray());
} else {
	die($rsp->msg);
}