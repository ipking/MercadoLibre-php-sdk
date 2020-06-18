<?php

include 'config.php';

$param = new \MercadoLibre\GlobalSelling\ClaimAttachment\ClaimAttachmentParameter();
$param->claim_id = "";
$param->attach_id = "";

$client = new \MercadoLibre\GlobalSelling\ClaimAttachment\ClaimAttachmentClient($param);
$client->setAccessToken($access_token);
$rsp = $client->send();

if($rsp->isSuccess()){
	print_r($rsp->file_url);
} else {
	die($rsp->msg);
}


