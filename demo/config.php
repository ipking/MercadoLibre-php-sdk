<?php

use MercadoLibre\Native\NativeClient;

include dirname(__DIR__).'/src/autoload.inc.php';

$access_token = 'APP_USR-4971952193146443-052100-e551f1831c3b126fee4d2c75317299e1-474295473';
$user_id = '474295473';

NativeClient::$debug = true;
//设置 请求成功时的 回调函数 可以用于收集日志记录 给请求加上请求 ID  用于跟踪
//根据自己的系统 业务需要 保存到 文件 数据库等等地方
NativeClient::setSendCallback(function(NativeClient $client){
	
	echo $client->getMethod().PHP_EOL;
	echo $client->getUrl().PHP_EOL;
	echo $client->getData().PHP_EOL;
	echo $client->getResponse().PHP_EOL;
	
	//收集记录
});