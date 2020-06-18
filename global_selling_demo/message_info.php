<?php

include 'config.php';

$param = new \MercadoLibre\GlobalSelling\MessageInfo\MessageInfoParameter();
$param->message_id = '';



$client = new \MercadoLibre\GlobalSelling\MessageInfo\MessageInfoClient($param);
$client->setAccessToken($access_token);
$rsp = $client->send();

if($rsp->isSuccess()){
	print_r($rsp->messages);
} else {
	die($rsp->msg);
}


