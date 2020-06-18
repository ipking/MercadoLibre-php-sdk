<?php

include 'config.php';

$param = new \MercadoLibre\GlobalSelling\Answer\AnswerParameter();
$param->question_id = '';
$param->text = 'Yes';

$client = new \MercadoLibre\GlobalSelling\Answer\AnswerClient($param);
$client->setAccessToken($access_token);


$rsp = $client->send();

if($rsp->isSuccess()){
	print_r($rsp->getDataAsArray());
} else {
	die($rsp->msg);
}

