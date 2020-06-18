<?php

include 'config.php';

$param = new \MercadoLibre\GlobalSelling\ItemUpdate\ItemUpdateParameter();
$param->item_id = '';

$client = new \MercadoLibre\GlobalSelling\ItemUpdate\ItemUpdateClient($param);
$client->setAccessToken($access_token);

//设置免费送货
$put_data = [
	"shipping" => [
		"mode"          => "custom",
		"local_pick_up" => false,
		"free_shipping" => true,
		"methods"       => [],
		"costs"         => [
			[
				"description"=> "Envío gratis",
				"cost"=> "0"
			]
		]
	]
];



$client->setPutData($put_data);
$rsp = $client->send();

if($rsp->isSuccess()){
	print_r($rsp->getDataAsArray());
} else {
	die($rsp->msg);
}