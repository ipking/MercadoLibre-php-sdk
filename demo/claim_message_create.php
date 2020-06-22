<?php

include 'config.php';

$param = new \MercadoLibre\NativeSelling\ClaimsMessagesPost\ClaimsMessagesPostParameter();
$param->claim_id = "1212";
$param->receiver_role = "complainant";
$param->message = "3q";
$param->attachments = [
	'3.jpg'
];


$client = new \MercadoLibre\NativeSelling\ClaimsMessagesPost\ClaimsMessagesPostClient($param);
$client->setAccessToken($access_token);

$rsp = $client->send();

if($rsp->isSuccess()){
	print_r($rsp->id);
} else {
	die($rsp->msg);
}


