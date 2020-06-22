<?php

include 'config.php';

$param = new \MercadoLibre\NativeSelling\ItemsDescriptionPut\ItemsDescriptionPutParameter();
$param->item_id = '';
$param->plain_text = 'test11224';

$client = new \MercadoLibre\NativeSelling\ItemsDescriptionPut\ItemsDescriptionPutClient($param);
$client->setAccessToken($access_token);

$rsp = $client->send();

if($rsp->isSuccess()){
	print_r($rsp->getDataAsArray());
} else {
	die($rsp->msg);
}

