<?php

include 'config.php';

$param = new \MercadoLibre\NativeSelling\ClaimsEvidencesGet\ClaimsEvidencesGetParameter();
$param->claim_id = '';

$client = new \MercadoLibre\NativeSelling\ClaimsEvidencesGet\ClaimsEvidencesGetClient($param);
$client->setAccessToken($access_token);
$rsp = $client->send();

if($rsp->isSuccess()){
	print_r($rsp->evidences);
} else {
	die($rsp->msg);
}