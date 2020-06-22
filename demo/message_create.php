<?php

include 'config.php';

$from = new \MercadoLibre\NativeSelling\MessagesPost\Model\From();
$from->user_id = $user_id;
$from->email = '';//$user_email
$to = new \MercadoLibre\NativeSelling\MessagesPost\Model\To();
$to->user_id = '';//$buyer_id

$param = new \MercadoLibre\NativeSelling\MessagesPost\MessagesPostParameter();
$param->pack_id = "";
$param->seller_id = $user_id;
$param->from = $from;
$param->to = $to;
$param->text = '3q';
$param->attachments = [
	'1.png'
];

$client = new \MercadoLibre\NativeSelling\MessagesPost\MessagesPostClient($param);
$client->setAccessToken($access_token);


$rsp = $client->send();

if($rsp->isSuccess()){
	print_r($rsp->messages);
} else {
	die($rsp->msg);
}


