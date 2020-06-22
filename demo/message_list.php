<?php

include 'config.php';

$param = new \MercadoLibre\NativeSelling\MessagesPacksGet\MessagesPacksGetParameter();
$param->seller_id = $user_id;
$param->pack_id = '';


$client = new \MercadoLibre\NativeSelling\MessagesPacksGet\MessagesPacksGetClient($param);
$client->setAccessToken($access_token);
$rsp = $client->send();

if($rsp->isSuccess()){
	print_r($rsp->messages);
} else {
	die($rsp->msg);
}


