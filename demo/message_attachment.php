<?php

include 'config.php';

$param = new \MercadoLibre\NativeSelling\MessagesAttachmentsGet\MessagesAttachmentsGetParameter();
$param->attachment_id = "4fc.jpg";

$client = new \MercadoLibre\NativeSelling\MessagesAttachmentsGet\MessagesAttachmentsGetClient($param);
$client->setAccessToken($access_token);
$rsp = $client->send();

if($rsp->isSuccess()){
	print_r($rsp->id);
} else {
	die($rsp->msg);
}


