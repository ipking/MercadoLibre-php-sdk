<?php

include 'config.php';

$param = new \MercadoLibre\NativeSelling\PicturesGet\PicturesGetParameter();
$param->picture_id = '';

$client = new \MercadoLibre\NativeSelling\PicturesGet\PicturesGetClient($param);
//$client->setAccessToken($access_token); //可以不用token
$rsp = $client->send();

if($rsp->isSuccess()){
	print_r($rsp->getDataAsArray());
	echo $rsp->getUrlBySize();
} else {
	die($rsp->msg);
}

