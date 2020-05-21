<?php

include 'config.php';

$param = new \MercadoLibre\Native\QuestionList\QuestionListParameter();
$param->seller_id = $user_id;
$param->offset = 0;
$param->limit = 50;
/**
unanswered:The question has not been answered yet
answered:The question was not answered
closed_unanswered:The product is closed and the question has never been answered
under_review:Both product and question are under review
 */

$client = new \MercadoLibre\Native\QuestionList\QuestionListClient($param);
$client->setAccessToken($access_token);
$rsp = $client->send();

if($rsp->isSuccess()){
	print_r($rsp->questions);
	print_r($rsp->paging->total);
} else {
	die($rsp->msg);
}


