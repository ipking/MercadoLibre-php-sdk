<?php

include 'config.php';

$param = new \MercadoLibre\Native\ClaimMessageList\ClaimMessageListParameter();
$param->claim_id = '5019928447';

$client = new \MercadoLibre\Native\ClaimMessageList\ClaimMessageListClient($param);
$client->setAccessToken($access_token);
$rsp = $client->send();

if($rsp->isSuccess()){
	print_r($rsp->messages);
} else {
	die($rsp->msg);
}