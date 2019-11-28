<?php
/**
 * 创建产品
 */

namespace MercadoLibre\Native;


use MercadoLibre\Core\Curl;
use MercadoLibre\Native\Model\SiteEnum;

class AuthClient {
	
	protected $client_id;
	protected $client_secret;
	
	protected static $API_ROOT_URL = "https://api.mercadolibre.com";
	/**
	 * @param $client_id
	 */
	public function setClientId($client_id) {
		$this->client_id = $client_id;
	}
	
	/**
	 * @param $client_secret
	 */
	public function setClientSecret($client_secret) {
		$this->client_secret = $client_secret;
	}
	
	public function getAuthUrl($redirect_uri, $site_id) {
		$auth_url = SiteEnum::$AUTH_URL[$site_id];
		$params = array("client_id" => $this->client_id, "response_type" => "code", "redirect_uri" => $redirect_uri);
		$auth_uri = $auth_url."/authorization?".http_build_query($params);
		return $auth_uri;
	}
	
	public function getAccessToken($redirect_uri, $code) {
		$auth_url = self::$API_ROOT_URL;
		$params = array(
			"grant_type"    => "authorization_code",
			"client_id"     => $this->client_id,
			"client_secret" => $this->client_secret,
			"code"          => $code,
			"redirect_uri"  => $redirect_uri
		);
		$auth_uri = $auth_url."/oauth/token?".http_build_query($params);
		$rsp = Curl::post($auth_uri,[]);
		return $rsp;
	}
	
	public function refreshAccessToken($refresh_token) {
		$auth_url = self::$API_ROOT_URL;
		$params = array(
			"grant_type"    => "refresh_token",
			"client_id"     => $this->client_id,
			"client_secret" => $this->client_secret,
			"refresh_token" => $refresh_token
		);
		$auth_uri = $auth_url."/oauth/token";
		$rsp = Curl::post($auth_uri,$params);
		return $rsp;
	}
}