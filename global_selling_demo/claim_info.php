<?php

include 'config.php';

$param = new \MercadoLibre\GlobalSelling\ClaimInfo\ClaimInfoParameter();
$param->claim_id = '';

$client = new \MercadoLibre\GlobalSelling\ClaimInfo\ClaimInfoClient($param);
$client->setAccessToken($access_token);
$rsp = $client->send();

if($rsp->isSuccess()){
	print_r($rsp->claim);
} else {
	die($rsp->msg);
}