<?php

include 'config.php';

$param = new \MercadoLibre\GlobalSelling\MessageAttachment\MessageAttachmentParameter();
$param->attachment_id = "fc.jpg";

$client = new \MercadoLibre\GlobalSelling\MessageAttachment\MessageAttachmentClient($param);
$client->setAccessToken($access_token);
$rsp = $client->send();

if($rsp->isSuccess()){
	print_r($rsp->id);
} else {
	die($rsp->msg);
}


