<?php

include 'config.php';

$param = new \MercadoLibre\NativeSelling\ClaimsAttachmentsPost\ClaimsAttachmentsPostParameter();
$param->claim_id = "";
$param->file = "H:/1.png";

$client = new \MercadoLibre\NativeSelling\ClaimsAttachmentsPost\ClaimsAttachmentsPostClient($param);
$client->setAccessToken($access_token);
$rsp = $client->send();

if($rsp->isSuccess()){
	print_r($rsp->filename);
} else {
	die($rsp->msg);
}


