<?php

include 'config.php';

$from = new \MercadoLibre\Native\MessageCreate\Model\From();
$from->user_id = $user_id;
$from->email = $user_email;
$to = new \MercadoLibre\Native\MessageCreate\Model\To();
$to->user_id = $buyer_id;

$param = new \MercadoLibre\Native\MessageCreate\MessageCreateParameter();
$param->pack_id = "";
$param->seller_id = $user_id;
$param->from = $from;
$param->to = $to;
$param->text = '3q';
$param->attachments = [
	'1.png'
];

$client = new \MercadoLibre\Native\MessageCreate\MessageCreateClient($param);
$client->setAccessToken($access_token);


$rsp = $client->send();

if($rsp->isSuccess()){
	print_r($rsp->messages);
} else {
	die($rsp->msg);
}


