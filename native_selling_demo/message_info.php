<?php

include 'config.php';

$param = new \MercadoLibre\NativeSelling\MessageInfo\MessageInfoParameter();
$param->message_id = '';



$client = new \MercadoLibre\NativeSelling\MessageInfo\MessageInfoClient($param);
$client->setAccessToken($access_token);
$rsp = $client->send();

if($rsp->isSuccess()){
	print_r($rsp->messages);
} else {
	die($rsp->msg);
}


