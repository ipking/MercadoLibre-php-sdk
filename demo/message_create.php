<?php

include 'config.php';

$param = new \MercadoLibre\Native\MessageCreate\MessageCreateParameter();
$param->pack_id = "";
$param->seller_id = $user_id;

$client = new \MercadoLibre\Native\MessageCreate\MessageCreateClient($param);
$client->setAccessToken($access_token);

$post_data = [
	"from"        => [
		"user_id" => $user_id,
		"email"   => $user_email,
	],
	"to"          => [
		"user_id" => $buyer_id,
	],
	"text"        => '3q',
	"attachments" => [
		''
	],
];



$client->setPostData($post_data);

$rsp = $client->send();

if($rsp->isSuccess()){
	print_r($rsp->messages);
} else {
	die($rsp->msg);
}


