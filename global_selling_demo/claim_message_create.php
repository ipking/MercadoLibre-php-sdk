<?php

include 'config.php';

$param = new \MercadoLibre\GlobalSelling\ClaimMessageCreate\ClaimMessageCreateParameter();
$param->claim_id = "1212";
$param->receiver_role = "complainant";
$param->message = "3q";
$param->attachments = [
	'53.jpg'
];


$client = new \MercadoLibre\GlobalSelling\ClaimMessageCreate\ClaimMessageCreateClient($param);
$client->setAccessToken($access_token);

$rsp = $client->send();

if($rsp->isSuccess()){
	print_r($rsp->id);
} else {
	die($rsp->msg);
}


