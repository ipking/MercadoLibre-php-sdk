<?php

include 'config.php';

$param = new \MercadoLibre\Native\GetMessageAttachment\GetMessageAttachmentParameter();
$param->attachment_id = "";

$client = new \MercadoLibre\Native\GetMessageAttachment\GetMessageAttachmentClient($param);
$client->setAccessToken($access_token);
$rsp = $client->send();

if($rsp->isSuccess()){
	print_r($rsp->id);
} else {
	die($rsp->msg);
}


