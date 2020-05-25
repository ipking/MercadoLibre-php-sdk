<?php

include 'config.php';

$param = new \MercadoLibre\Native\MessageAttachment\MessageAttachmentParameter();
$param->attachment_id = "";

$client = new \MercadoLibre\Native\MessageAttachment\MessageAttachmentClient($param);
$client->setAccessToken($access_token);
$rsp = $client->send();

if($rsp->isSuccess()){
	print_r($rsp->id);
} else {
	die($rsp->msg);
}


