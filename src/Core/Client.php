<?php

namespace MercadoLibre\Core;

abstract class Client{
	
	public static $debug = false;
	
	/**
	 * 请求方式
	 */
	protected $method = 'GET';
	
	/**
	 * 请求地址
	 */
	protected $url;
	
	/** @var Parameter $param */
	protected $param;
	
	/** @var string $client_response */
	protected $client_response;
	
	protected static $callback;
	
	/**
	 * 通过OAuth授权方式获得
	 */
	protected $access_token;

	
	/**
	 * @param $access_token
	 */
	public function setAccessToken($access_token){
		$this->access_token = $access_token;
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
	 * @throws \MercadoLibre\exception\HttpException
	 * @throws \MercadoLibre\exception\ParamValidateException
	 */
	protected function send(){
		//校验数据
		$this->param->validateAll();
		$arr_data = $this->param->getDataAsArray();
		return $this->sendData($arr_data);
	}
	
	/**
	 * 发送数据
	 * @param array $arr_data
	 * @return array
	 * @throws \MercadoLibre\exception\HttpException
	 */
	protected function sendData($arr_data){
		$json_data = json_encode($arr_data);
		
		if($this->access_token){
			$access_token = 'access_token='.$this->access_token;
			if(strpos($this->url,'?')){
				$this->url .= '&'.$access_token;
			}else{
				$this->url .= '?'.$access_token;
			}
		}
		
		if(self::$debug){
			echo "\n+++++++++++++++++ REQ +++++++++++++++\n";
			echo $this->url.PHP_EOL;
			echo $json_data;
			echo "\n+++++++++++++++++ REQ +++++++++++++++\n";
		}
		switch($this->method){
			case "GET":
				$this->client_response = Curl::get($this->url);
				break;
			case "POST":
				$this->client_response = Curl::postInJSON($this->url, $arr_data);
				break;
			case "PUT":
				$this->client_response = Curl::put($this->url, $arr_data);
				break;
			case "DEL":
				$this->client_response = Curl::del($this->url, $arr_data);
				break;
			default:
				throw new \Exception('method '.$this->method.' not yet supply');
				break;
		}
		
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