<?php

include 'config.php';

$param = new \MercadoLibre\Native\QuestionList\QuestionListParameter();
$param->seller_id = $user_id;
$param->offset = 0;
$param->limit = 2;
$param->status = 'unanswered';
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
	var_dump($rsp->questions);
	var_dump($rsp->paging->total);
} else {
	die($rsp->msg);
}