<?php

include 'config.php';

$param = new \MercadoLibre\NativeSelling\MessagesGet\MessagesGetParameter();
$param->message_id = '';



$client = new \MercadoLibre\NativeSelling\MessagesGet\MessagesGetClient($param);
$client->setAccessToken($access_token);
$rsp = $client->send();

if($rsp->isSuccess()){
	print_r($rsp->messages);
} else {
	die($rsp->msg);
}


