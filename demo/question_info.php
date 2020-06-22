<?php

include 'config.php';

$param = new \MercadoLibre\NativeSelling\QuestionsGet\QuestionsGetParameter();
$param->question_id = '';

$client = new \MercadoLibre\NativeSelling\QuestionsGet\QuestionsGetClient($param);
$client->setAccessToken($access_token);
$rsp = $client->send();

if($rsp->isSuccess()){
	print_r($rsp->question);
} else {
	die($rsp->msg);
}


