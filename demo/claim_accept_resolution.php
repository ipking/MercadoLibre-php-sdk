<?php

include 'config.php';

$param = new \MercadoLibre\NativeSelling\ClaimsAcceptResolutionsPut\ClaimsAcceptResolutionsPutParameter();
$param->claim_id = '';

$client = new \MercadoLibre\NativeSelling\ClaimsAcceptResolutionsPut\ClaimsAcceptResolutionsPutClient($param);
$client->setAccessToken($access_token);
$rsp = $client->send();

if($rsp->isSuccess()){
	print_r($rsp->expected_resolutions);
} else {
	die($rsp->msg);
}