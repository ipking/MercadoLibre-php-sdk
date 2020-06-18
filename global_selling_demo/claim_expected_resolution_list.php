<?php

include 'config.php';

$param = new \MercadoLibre\GlobalSelling\ClaimExpectedResolutionList\ClaimExpectedResolutionListParameter();
$param->claim_id = '';

$client = new \MercadoLibre\GlobalSelling\ClaimExpectedResolutionList\ClaimExpectedResolutionListClient($param);
$client->setAccessToken($access_token);
$rsp = $client->send();

if($rsp->isSuccess()){
	print_r($rsp->expected_resolutions);
} else {
	die($rsp->msg);
}