<?php

include 'config.php';

$param = new \MercadoLibre\Native\MessageList\MessageListParameter();
$param->seller_id = $user_id;
$param->pack_id = '';


$client = new \MercadoLibre\Native\MessageList\MessageListClient($param);
$client->setAccessToken($access_token);
$rsp = $client->send();

if($rsp->isSuccess()){
	print_r($rsp->messages);
} else {
	die($rsp->msg);
}


