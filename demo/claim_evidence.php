<?php

include 'config.php';

/**
 * @url https://developers.mercadolibre.com.mx/en_us/working-with-claims#Uploading-proof-of-shipping
 */
$param = new \MercadoLibre\NativeSelling\ClaimEvidence\ClaimEvidenceParameter();
$param->claim_id = '1221';
$param->type = 'shipping_evidence'; //shipping_evidence or handling_shipping_evidence
$param->shipping_method = 'mail'; //mail  personal_delivery   email

$client = new \MercadoLibre\NativeSelling\ClaimEvidence\ClaimEvidenceClient($param);
$client->setAccessToken($access_token);
$rsp = $client->send();

if($rsp->isSuccess()){
	print_r($rsp->evidences);
} else {
	die($rsp->msg);
}