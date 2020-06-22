<?php

include 'config.php';

$param = new \MercadoLibre\NativeSelling\UsersApplicationsDelete\UsersApplicationsDeleteParameter();
$param->seller_id = $user_id;
$param->app_id = '';//$app_id;

$client = new \MercadoLibre\NativeSelling\UsersApplicationsDelete\UsersApplicationsDeleteClient($param);
$client->setAccessToken($access_token);


$rsp = $client->send();

if($rsp->isSuccess()){
	print_r($rsp->getDataAsArray());
} else {
	die($rsp->msg);
}

