<?php
/**
 * 请求客户端
 */

namespace MercadoLibre\NativeSelling;
use MercadoLibre\Core\Client;
use MercadoLibre\Core\Parameter;

class NativeSellingClient extends Client{
	
	/**
	 * 正式环境
	 */
	private static $host_prod = 'https://api.mercadolibre.com';
	
	public function __construct($name,Parameter $param = null){
		$this->url = self::$host_prod.$name;
		$this->param = $param;
	}
}