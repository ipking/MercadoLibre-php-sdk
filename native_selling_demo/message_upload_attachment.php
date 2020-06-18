<?php

include 'config.php';

$param = new \MercadoLibre\NativeSelling\MessageUploadAttachment\MessageUploadAttachmentParameter();
$param->file = "H:/1.jpg";

$client = new \MercadoLibre\NativeSelling\MessageUploadAttachment\MessageUploadAttachmentClient($param);
$client->setAccessToken($access_token);
$rsp = $client->send();

if($rsp->isSuccess()){
	print_r($rsp->id);
} else {
	die($rsp->msg);
}


