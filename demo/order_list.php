<?php

include 'config.php';

$param = new \MercadoLibre\NativeSelling\OrdersSearchGet\OrdersSearchGetParameter();
$param->seller_id = $user_id;
//$param->offset = 0;
//$param->limit = 2;
//$param->order_status = 'paid';
$param->q = '';
//$param->order_date_last_updated_from = '2015-07-01T00:00:00.000-00:00';
//$param->order_date_last_updated_to = '2015-07-02T00:00:00.000-00:00';

$client = new \MercadoLibre\NativeSelling\OrdersSearchGet\OrdersSearchGetClient($param);
$client->setAccessToken($access_token);
$rsp = $client->send();

if($rsp->isSuccess()){
	print_r($rsp->orders);
	var_dump($rsp->paging->total);
} else {
	die($rsp->msg);
}