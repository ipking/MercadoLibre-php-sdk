<?php

include 'config.php';

$param = new \MercadoLibre\Native\ClaimRequestMediation\ClaimRequestMediationParameter();
$param->claim_id = '';

$client = new \MercadoLibre\Native\ClaimRequestMediation\ClaimRequestMediationClient($param);
$client->setAccessToken($access_token);
$rsp = $client->send();

if($rsp->isSuccess()){
	print_r($rsp->claim);
} else {
	die($rsp->msg);
}