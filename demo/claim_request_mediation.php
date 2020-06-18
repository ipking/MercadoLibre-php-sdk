<?php

include 'config.php';

$param = new \MercadoLibre\NativeSelling\ClaimRequestMediation\ClaimRequestMediationParameter();
$param->claim_id = '';

$client = new \MercadoLibre\NativeSelling\ClaimRequestMediation\ClaimRequestMediationClient($param);
$client->setAccessToken($access_token);
$rsp = $client->send();

if($rsp->isSuccess()){
	print_r($rsp->claim);
} else {
	die($rsp->msg);
}