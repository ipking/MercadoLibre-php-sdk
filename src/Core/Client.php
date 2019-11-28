<?php

namespace MercadoLibre\Core;

abstract class Client{
	public static $debug = false;
	/**
	 * 请求地址
	 */
	protected $url;
	
	/** @var Parameter $param */
	protected $param;
	
	/** @var string $client_response */
	protected $client_response;
	
	private static $callback;
	
	/**
	 * 应用接入申请的AppKey
	 */
	private static $app_key;
	
	/**
	 * 应用接入申请的AppSecret
	 */
	private static $app_secret;
	
	/**
	 * 通过OAuth授权方式获得，要求软件服务商必须传入
	 */
	private static $access_token;

	/**
	 * 设置客户鉴权信息 (软件服务商接入 access_token不能为空 )
	 * @param $app_key
	 * @param $app_secret
	 * @param $access_token
	 */
	public static function setAuthInfo($app_key, $app_secret,$access_token=null){
		self::$app_key = $app_key;
		self::$app_secret = $app_secret;
		self::$access_token = $access_token;
	}
	
	/**
	 * @param $cb
	 */
	public static function setSendCallback($cb){
		self::$callback = $cb;
	}

	/**
	 * @param \MercadoLibre\Core\Parameter $param
	 * @return $this
	 */
	public function setParam(Parameter $param){
		$this->param = $param;
		return $this;
	}
	
	/**
	 * @return \MercadoLibre\Core\Parameter $param
	 */
	public function getParam(){
		return $this->param;
	}
	/**
	 * @return string
	 */
	public function getResponse(){
		return $this->client_response;
	}
	
	
	/**
	 * 发送数据
	 * @return array
	 */
	protected function send(){
		//校验数据
		$this->param->validateAll();
		
		
		//设置鉴权数据
		//按首字母升序排列
		$url_param = [
			'app_key'   => self::$app_key,
			'format'    => $this->format,
			'method'    => $this->method,
			'timestamp' => $this->timestamp,
			'v'         => $this->v,
		];
		
		$arr_data = $this->param->getDataAsArray();
		$json_data = json_encode($arr_data);
		
		$auth_str = '';
		foreach($url_param as $key => $value){
			$auth_str .= $key.$value;
		}
		$auth_str.=$json_data.self::$app_secret;
		
		$sign = strtolower(md5($auth_str));
		
		$url_param_str = [];
		foreach($url_param as $key => $value){
			$url_param_str[] = $key.'='.$value;
		}
		
		$url_param_str[] = 'sign='.$sign;
		self::$access_token and $url_param_str[] = 'access_token='.self::$access_token;
		
		if(self::$debug){
			echo "\n+++++++++++++++++ REQ +++++++++++++++\n";
			echo $this->url.'?'.join('&',$url_param_str).PHP_EOL;
			echo $json_data;
			echo "\n+++++++++++++++++ REQ +++++++++++++++\n";
		}
		$this->client_response = Curl::postInJSON($this->url.'?'.join('&',$url_param_str), $arr_data);
		if(self::$debug){
			echo "\n============== RSP =================\n";
			echo $this->client_response;
			echo "\n============== RSP =================\n";
		}
		
		if(is_callable(self::$callback)){
			$callback = self::$callback;
			$callback($this);
		}
		return \json_decode($this->client_response, true);
	}
}