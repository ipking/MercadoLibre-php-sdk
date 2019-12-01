<?php

use MercadoLibre\Native\NativeClient;

include dirname(__DIR__).'/src/autoload.inc.php';

$access_token = 'APP_USR-4971952193146443-120111-0223eb0a75710d86eaee6d5d4e1d208c-474295473';
$user_id = '474295473';

NativeClient::$debug = true;
//设置 请求成功时的 回调函数 可以用于收集日志记录 给请求加上请求 ID  用于跟踪
//根据自己的系统 业务需要 保存到 文件 数据库等等地方
NativeClient::setSendCallback(function(NativeClient $client){
	
	echo json_encode($client->getMethod()).PHP_EOL;
	echo json_encode($client->getUrl()).PHP_EOL;
	echo json_encode($client->getData()).PHP_EOL;
	echo $client->getResponse().PHP_EOL;
	
	//收集记录
});