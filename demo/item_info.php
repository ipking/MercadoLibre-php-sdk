<?php



include dirname(__DIR__).'/src/autoload.inc.php';
include 'config.php';


$param = new \MercadoLibre\Native\ItemInfo\ItemInfoParameter();
$param->item_id = 'MLM1234';

$client = new \MercadoLibre\Native\ItemInfo\ItemInfoClient($param);
$client::$debug = true;
$client->setAccessToken($access_token);
$rsp = $client->send();

if($rsp->isSuccess()){
	print_r($rsp->getDataAsArray());
} else {
	die($rsp->msg);
}