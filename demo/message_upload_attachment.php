<?php

include 'config.php';

$param = new \MercadoLibre\Native\MessageUploadAttachment\MessageUploadAttachmentParameter();
$param->file = "H:/1.png";

$client = new \MercadoLibre\Native\MessageUploadAttachment\MessageUploadAttachmentClient($param);
$client->setAccessToken($access_token);
$rsp = $client->send();

if($rsp->isSuccess()){
	print_r($rsp->id);
} else {
	die($rsp->msg);
}


