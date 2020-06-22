<?php

include 'config.php';

$param = new \MercadoLibre\NativeSelling\MessagesAttachmentsPost\MessagesAttachmentsPostParameter();
$param->file = "H:/1.jpg";

$client = new \MercadoLibre\NativeSelling\MessagesAttachmentsPost\MessagesAttachmentsPostClient($param);
$client->setAccessToken($access_token);
$rsp = $client->send();

if($rsp->isSuccess()){
	print_r($rsp->id);
} else {
	die($rsp->msg);
}


