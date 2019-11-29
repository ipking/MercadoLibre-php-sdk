<?php



include dirname(__DIR__).'/src/autoload.inc.php';
include 'config.php';


$param = new \MercadoLibre\Native\UserInfo\UserInfoParameter();
$param->user_id = $user_id;

$client = new \MercadoLibre\Native\UserInfo\UserInfoClient($param);
$client::$debug = true;
$client->setAccessToken($access_token);
$rsp = $client->send();

if($rsp->isSuccess()){
	var_dump($rsp->getDataAsArray());
} else {
	die($rsp->msg);
}