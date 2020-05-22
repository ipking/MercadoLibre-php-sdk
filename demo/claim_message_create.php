<?php

include 'config.php';

$param = new \MercadoLibre\Native\ClaimMessageCreate\ClaimMessageCreateParameter();
$param->claim_id = "";


$client = new \MercadoLibre\Native\ClaimMessageCreate\ClaimMessageCreateClient($param);
$client->setAccessToken($access_token);

$post_data = [
	"receiver_role" => 'complainant',
	"message"       => '3q',
	"attachments"   => [
		'fa8d559e-b6c9-4a9d-9824-aba4607bd869_271959653.jpg'
	],
];



$client->setPostData($post_data);

$rsp = $client->send();

if($rsp->isSuccess()){
	print_r($rsp->id);
} else {
	die($rsp->msg);
}


