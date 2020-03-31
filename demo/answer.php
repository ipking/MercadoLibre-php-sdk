<?php

include 'config.php';

$param = new \MercadoLibre\Native\Answer\AnswerParameter();
$param->question_id = '7201658538';
$param->text = 'Yes';

$client = new \MercadoLibre\Native\Answer\AnswerClient($param);
$client->setAccessToken($access_token);


$rsp = $client->send();

if($rsp->isSuccess()){
	print_r($rsp->getDataAsArray());
} else {
	die($rsp->msg);
}

