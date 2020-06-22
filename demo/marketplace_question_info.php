<?php

include 'config.php';

$param = new \MercadoLibre\GlobalSelling\QuestionsGet\QuestionsGetParameter();
$param->question_id = '12';

$client = new \MercadoLibre\GlobalSelling\QuestionsGet\QuestionsGetClient($param);
$client->setAccessToken($access_token);
$rsp = $client->send();

if($rsp->isSuccess()){
	print_r($rsp->question);
} else {
	die($rsp->msg);
}


