<?php

include 'config.php';

$param = new \MercadoLibre\NativeSelling\ClaimExpectedResolutionList\ClaimExpectedResolutionListParameter();
$param->claim_id = '';

$client = new \MercadoLibre\NativeSelling\ClaimExpectedResolutionList\ClaimExpectedResolutionListClient($param);
$client->setAccessToken($access_token);
$rsp = $client->send();

if($rsp->isSuccess()){
	print_r($rsp->expected_resolutions);
} else {
	die($rsp->msg);
}