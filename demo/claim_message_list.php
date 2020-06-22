<?php

include 'config.php';

$param = new \MercadoLibre\NativeSelling\ClaimsMessagesGet\ClaimsMessagesGetParameter();
$param->claim_id = '';

$client = new \MercadoLibre\NativeSelling\ClaimsMessagesGet\ClaimsMessagesGetClient($param);
$client->setAccessToken($access_token);
$rsp = $client->send();

if($rsp->isSuccess()){
	print_r($rsp->messages);
} else {
	die($rsp->msg);
}