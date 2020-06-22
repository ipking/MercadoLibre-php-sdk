<?php

include 'config.php';

$param = new \MercadoLibre\NativeSelling\UsersGet\UsersGetParameter();
$param->seller_id = $user_id;

$client = new \MercadoLibre\NativeSelling\UsersGet\UsersGetClient($param);
$client->setAccessToken($access_token);
$rsp = $client->send();

if($rsp->isSuccess()){
	print_r($rsp->getDataAsArray());
} else {
	die($rsp->msg);
}