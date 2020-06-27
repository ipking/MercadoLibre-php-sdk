<?php

include 'config.php';


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



$param = new \MercadoLibre\NativeSelling\ItemsPut\ItemsPutParameter($put_data);
$param->item_id = '';

$client = new \MercadoLibre\NativeSelling\ItemsPut\ItemsPutClient($param);
$client->setAccessToken($access_token);

$rsp = $client->send();

if($rsp->isSuccess()){
	print_r($rsp->getDataAsArray());
} else {
	die($rsp->msg);
}