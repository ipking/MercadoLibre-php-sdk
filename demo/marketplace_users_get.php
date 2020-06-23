<?php

use MercadoLibre\GlobalSelling\MarketplaceUsersGet\MarketplaceUsersGetClient;
use MercadoLibre\GlobalSelling\MarketplaceUsersGet\MarketplaceUsersGetParameter;

include 'config.php';

$param = new MarketplaceUsersGetParameter();
$param->user_id = $user_id;

$client = new MarketplaceUsersGetClient($param);
$client->setAccessToken($access_token);
$rsp = $client->send();

if($rsp->isSuccess()){
	print_r($rsp->getData());
} else {
	die($rsp->msg);
}