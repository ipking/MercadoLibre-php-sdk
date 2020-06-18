<?php

include 'config.php';

$from = new \MercadoLibre\GlobalSelling\MessageCreate\Model\From();
$from->user_id = $user_id;
$from->email = $user_email;
$to = new \MercadoLibre\GlobalSelling\MessageCreate\Model\To();
$to->user_id = $buyer_id;

$param = new \MercadoLibre\GlobalSelling\MessageCreate\MessageCreateParameter();
$param->pack_id = "";
$param->seller_id = $user_id;
$param->from = $from;
$param->to = $to;
$param->text = '3q';
$param->attachments = [
	'1.png'
];

$client = new \MercadoLibre\GlobalSelling\MessageCreate\MessageCreateClient($param);
$client->setAccessToken($access_token);


$rsp = $client->send();

if($rsp->isSuccess()){
	print_r($rsp->messages);
} else {
	die($rsp->msg);
}


