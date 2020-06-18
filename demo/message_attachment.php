<?php

include 'config.php';

$param = new \MercadoLibre\NativeSelling\MessageAttachment\MessageAttachmentParameter();
$param->attachment_id = "4fc.jpg";

$client = new \MercadoLibre\NativeSelling\MessageAttachment\MessageAttachmentClient($param);
$client->setAccessToken($access_token);
$rsp = $client->send();

if($rsp->isSuccess()){
	print_r($rsp->id);
} else {
	die($rsp->msg);
}


