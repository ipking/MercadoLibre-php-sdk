<?php

include 'config.php';

$param = new \MercadoLibre\NativeSelling\ClaimsPut\ClaimsPutParameter();
$param->claim_id = '';

$client = new \MercadoLibre\NativeSelling\ClaimsPut\ClaimsPutClient($param);
$client->setAccessToken($access_token);
$rsp = $client->send();

if($rsp->isSuccess()){
	print_r($rsp->claim);
} else {
	die($rsp->msg);
}