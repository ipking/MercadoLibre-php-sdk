<?php

include 'config.php';

$param = new \MercadoLibre\GlobalSelling\MarketplaceQuestionsGet\QuestionsGetParameter();
$param->question_id = '12';

$client = new \MercadoLibre\GlobalSelling\MarketplaceQuestionsGet\MarketplaceQuestionsGetClient($param);
$client->setAccessToken($access_token);
$rsp = $client->send();

if($rsp->isSuccess()){
	print_r($rsp->question);
} else {
	die($rsp->msg);
}


