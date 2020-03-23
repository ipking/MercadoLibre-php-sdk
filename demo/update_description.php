<?php

include 'config.php';

$param = new \MercadoLibre\Native\UpdateDescription\UpdateDescriptionParameter();
$param->item_id = '';

$client = new \MercadoLibre\Native\UpdateDescription\UpdateDescriptionClient($param);
$client->setAccessToken($access_token);

$json =<<<EOL
{
    "plain_text":"test11224"
}
EOL;


$client->setPutData(json_decode($json,1));

$rsp = $client->send();

if($rsp->isSuccess()){
	print_r($rsp->getDataAsArray());
} else {
	die($rsp->msg);
}

