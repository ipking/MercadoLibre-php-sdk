<?php

include 'config.php';

$param = new \MercadoLibre\Native\ItemUpdate\ItemUpdateParameter();
$param->item_id = 'MLM1234';

$client = new \MercadoLibre\Native\ItemUpdate\ItemUpdateClient($param);
$client->setAccessToken($access_token);

$json =<<<EOL
{
    "status":"paused"
}
EOL;


$client->setPutData(json_decode($json,1));
$rsp = $client->send();

if($rsp->isSuccess()){
	print_r($rsp->getDataAsArray());
} else {
	die($rsp->msg);
}