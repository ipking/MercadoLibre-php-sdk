<?php

include 'config.php';

$param = new \MercadoLibre\Native\UserInfo\UserInfoParameter();
$param->user_id = $user_id;

$client = new \MercadoLibre\Native\UserInfo\UserInfoClient($param);
$client->setAccessToken($access_token);
$rsp = $client->send();

if($rsp->isSuccess()){
	print_r($rsp->getDataAsArray());
} else {
	die($rsp->msg);
}