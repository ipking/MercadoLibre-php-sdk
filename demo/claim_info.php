<?php

include 'config.php';

$param = new \MercadoLibre\NativeSelling\ClaimsGet\ClaimsGetParameter();
$param->claim_id = '';

$client = new \MercadoLibre\NativeSelling\ClaimsGet\ClaimsGetClient($param);
$client->setAccessToken($access_token);
$rsp = $client->send();

if($rsp->isSuccess()){
	print_r($rsp->claim);
} else {
	die($rsp->msg);
}