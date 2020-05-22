<?php

include 'config.php';

$param = new \MercadoLibre\Native\UploadClaimAttachment\UploadClaimAttachmentParameter();
$param->claim_id = "";
$param->file = "H:/1.png";

$client = new \MercadoLibre\Native\UploadClaimAttachment\UploadClaimAttachmentClient($param);
$client->setAccessToken($access_token);
$rsp = $client->send();

if($rsp->isSuccess()){
	print_r($rsp->filename);
} else {
	die($rsp->msg);
}


