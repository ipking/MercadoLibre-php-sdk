<?php

include 'config.php';

$param = new \MercadoLibre\GlobalSelling\ClaimLoadResolution\ClaimLoadResolutionParameter();
$param->claim_id = '';
$param->expected_resolution = 'return_product';

$client = new \MercadoLibre\GlobalSelling\ClaimLoadResolution\ClaimLoadResolutionClient($param);
$client->setAccessToken($access_token);
$rsp = $client->send();

if($rsp->isSuccess()){
	print_r($rsp->expected_resolutions);
} else {
	die($rsp->msg);
}