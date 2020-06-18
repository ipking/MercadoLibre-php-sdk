<?php

include 'config.php';

$param = new \MercadoLibre\NativeSelling\ClaimEvidenceList\ClaimEvidenceListParameter();
$param->claim_id = '';

$client = new \MercadoLibre\NativeSelling\ClaimEvidenceList\ClaimEvidenceListClient($param);
$client->setAccessToken($access_token);
$rsp = $client->send();

if($rsp->isSuccess()){
	print_r($rsp->evidences);
} else {
	die($rsp->msg);
}