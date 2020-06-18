<?php

use MercadoLibre\GlobalSelling\UsersGet\UsersGetClient;
use MercadoLibre\GlobalSelling\UsersGet\UsersGetParameter;

include 'config.php';

$param = new UsersGetParameter();
$param->user_id = $user_id;

$client = new UsersGetClient($param);
$client->setAccessToken($access_token);
$rsp = $client->send();

if($rsp->isSuccess()){
	print_r($rsp->getData());
} else {
	die($rsp->msg);
}