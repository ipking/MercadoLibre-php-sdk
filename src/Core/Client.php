<?php

namespace MercadoLibre\Core;

abstract class Client{
	
	const METHOD_GET = 'GET';
	const METHOD_POST = 'POST';
	const METHOD_POST_FIELD = 'POST_FIELD';
	const METHOD_POST_FILE = 'POST_FILE';
	const METHOD_PUT = 'PUT';
	const METHOD_DELETE = 'DELETE';
	
	public static $debug = false;
	
	protected static $callback;
	
	/**
	 * 请求方式
	 */
	protected $method = self::METHOD_GET;
	
	/**
	 * curl option
	 */
	protected $curl_option = array();
	
	/**
	 * 请求地址
	 */
	protected $url;
	/**
	 * 请求数据
	 */
	protected $data;
	
	/** @var Parameter $param */
	protected $param;
	
	/** @var string $client_response */
	protected $client_response;
	
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
	 * @return \MercadoLibre\Core\Parameter
	 */
	public function getParam(){
		return $this->param;
	}
	
	/**
	 * @return string
	 */
	public function getMethod(){
		return $this->method;
	}
	
	/**
	 * @return string
	 */
	public function getUrl(){
		return $this->url;
	}
	
	/**
	 * @return string
	 */
	public function getData(){
		return $this->data;
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
		$arr_data = $this->param->getDataAsArray($this->param->getDefines());
		return $this->sendData($arr_data);
	}
	
	/**
	 * 发送数据
	 * @param array $arr_data
	 * @return array
	 * @throws \MercadoLibre\exception\HttpException
	 */
	protected function sendData($arr_data){
		$this->data = json_encode($arr_data);
		
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
			echo $this->data;
			echo "\n+++++++++++++++++ REQ +++++++++++++++\n";
		}
		
		try{
			$curl_option= $this->curl_option;
			
			$timeout = Curl::DEFAULT_TIMEOUT;
			switch($this->method){
				case self::METHOD_GET:
					$this->client_response = Curl::get($this->url,$timeout,$curl_option);
					break;
				case self::METHOD_POST:
					$this->client_response = Curl::postInJson($this->url, $arr_data,$timeout,$curl_option);
					break;
				case self::METHOD_POST_FIELD:
					$this->client_response = Curl::postInField($this->url, $arr_data,$timeout,$curl_option);
					break;
				case self::METHOD_POST_FILE:
					$this->client_response = Curl::postFile($this->url, $arr_data,$timeout,$curl_option);
					break;
				case self::METHOD_PUT:
					$this->client_response = Curl::put($this->url, $arr_data,$timeout,$curl_option);
					break;
				case self::METHOD_DELETE:
					$this->client_response = Curl::del($this->url,$timeout,$curl_option);
					break;
				default:
					throw new \Exception('method '.$this->method.' not yet supply');
					break;
			}
		}catch(\Exception $e){
			return ['error'=>1,'message'=>$e->getMessage()];
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