<?php

include 'config.php';

$param = new \MercadoLibre\GlobalSelling\MessageUploadAttachment\MessageUploadAttachmentParameter();
$param->file = "H:/1.jpg";

$client = new \MercadoLibre\GlobalSelling\MessageUploadAttachment\MessageUploadAttachmentClient($param);
$client->setAccessToken($access_token);
$rsp = $client->send();

if($rsp->isSuccess()){
	print_r($rsp->id);
} else {
	die($rsp->msg);
}


