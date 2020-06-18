<?php

use MercadoLibre\GlobalSelling\GlobalSellingClient;

include dirname(__DIR__).'/src/autoload.inc.php';

$access_token = '';
$user_id = '';

GlobalSellingClient::$debug = true;
//设置 请求成功时的 回调函数 可以用于收集日志记录 给请求加上请求 ID  用于跟踪
//根据自己的系统 业务需要 保存到 文件 数据库等等地方
GlobalSellingClient::setSendCallback(function(GlobalSellingClient $client){
	
	echo $client->getMethod().PHP_EOL;
	echo $client->getUrl().PHP_EOL;
	echo $client->getData().PHP_EOL;
	echo $client->getResponse().PHP_EOL;
	
	//收集记录
});