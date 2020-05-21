<?php

include 'config.php';

$param = new \MercadoLibre\Native\MessageInfo\MessageInfoParameter();
$param->message_id = '';



$client = new \MercadoLibre\Native\MessageInfo\MessageInfoClient($param);
$client->setAccessToken($access_token);
$rsp = $client->send();

if($rsp->isSuccess()){
	print_r($rsp->messages);
} else {
	die($rsp->msg);
}


