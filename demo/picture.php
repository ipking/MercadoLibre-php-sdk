<?php

include 'config.php';

$param = new \MercadoLibre\Native\Pictures\PicturesParameter();
$param->picture_id = '';

$client = new \MercadoLibre\Native\Pictures\PicturesClient($param);
//$client->setAccessToken($access_token); //可以不用token
$rsp = $client->send();

if($rsp->isSuccess()){
	print_r($rsp->getDataAsArray());
	echo $rsp->getUrlBySize();
} else {
	die($rsp->msg);
}

