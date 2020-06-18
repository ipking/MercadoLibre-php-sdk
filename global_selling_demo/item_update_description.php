<?php

include 'config.php';

$param = new \MercadoLibre\GlobalSelling\ItemUpdateDescription\ItemUpdateDescriptionParameter();
$param->item_id = '';
$param->plain_text = 'test11224';

$client = new \MercadoLibre\GlobalSelling\ItemUpdateDescription\ItemUpdateDescriptionClient($param);
$client->setAccessToken($access_token);

$rsp = $client->send();

if($rsp->isSuccess()){
	print_r($rsp->getDataAsArray());
} else {
	die($rsp->msg);
}

