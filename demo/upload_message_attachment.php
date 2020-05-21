<?php

include 'config.php';

$param = new \MercadoLibre\Native\UploadMessageAttachment\UploadMessageAttachmentParameter();
$param->file = "H:/1.png";

$client = new \MercadoLibre\Native\UploadMessageAttachment\UploadMessageAttachmentClient($param);
$client->setAccessToken($access_token);
$rsp = $client->send();

if($rsp->isSuccess()){
	print_r($rsp->id);
} else {
	die($rsp->msg);
}


