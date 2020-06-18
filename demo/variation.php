<?php

include 'config.php';

$param = new \MercadoLibre\NativeSelling\Variations\VariationsParameter();
$param->item_id = '';
$param->variation_id = '';

$client = new \MercadoLibre\NativeSelling\Variations\VariationsClient($param);
$client->setAccessToken($access_token);
$rsp = $client->send();

if($rsp->isSuccess()){
	print_r($rsp->getDataAsArray());
} else {
	die($rsp->msg);
}