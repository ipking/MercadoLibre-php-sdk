<?php

include 'config.php';

$param = new \MercadoLibre\Native\ClaimAcceptResolution\ClaimAcceptResolutionParameter();
$param->claim_id = '';

$client = new \MercadoLibre\Native\ClaimAcceptResolution\ClaimAcceptResolutionClient($param);
$client->setAccessToken($access_token);
$rsp = $client->send();

if($rsp->isSuccess()){
	print_r($rsp->expected_resolutions);
} else {
	die($rsp->msg);
}