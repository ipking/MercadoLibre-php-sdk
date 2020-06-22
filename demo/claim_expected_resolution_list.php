<?php

include 'config.php';

$param = new \MercadoLibre\NativeSelling\ClaimsExpectedResolutionsGet\ClaimsExpectedResolutionsGetParameter();
$param->claim_id = '';

$client = new \MercadoLibre\NativeSelling\ClaimsExpectedResolutionsGet\ClaimsExpectedResolutionsGetClient($param);
$client->setAccessToken($access_token);
$rsp = $client->send();

if($rsp->isSuccess()){
	print_r($rsp->expected_resolutions);
} else {
	die($rsp->msg);
}