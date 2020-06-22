<?php

include 'config.php';

$param = new \MercadoLibre\NativeSelling\AnswersPost\AnswersPostParameter();
$param->question_id = '';
$param->text = 'Yes';

$client = new \MercadoLibre\NativeSelling\AnswersPost\AnswersPostClient($param);
$client->setAccessToken($access_token);


$rsp = $client->send();

if($rsp->isSuccess()){
	print_r($rsp->getDataAsArray());
} else {
	die($rsp->msg);
}

