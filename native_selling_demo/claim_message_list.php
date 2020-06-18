<?php

include 'config.php';

$param = new \MercadoLibre\NativeSelling\ClaimMessageList\ClaimMessageListParameter();
$param->claim_id = '';

$client = new \MercadoLibre\NativeSelling\ClaimMessageList\ClaimMessageListClient($param);
$client->setAccessToken($access_token);
$rsp = $client->send();

if($rsp->isSuccess()){
	print_r($rsp->messages);
} else {
	die($rsp->msg);
}