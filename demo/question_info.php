<?php

include 'config.php';

$param = new \MercadoLibre\Native\QuestionInfo\QuestionInfoParameter();
$param->question_id = '';

$client = new \MercadoLibre\Native\QuestionInfo\QuestionInfoClient($param);
$client->setAccessToken($access_token);
$rsp = $client->send();

if($rsp->isSuccess()){
	print_r($rsp->question);
} else {
	die($rsp->msg);
}


