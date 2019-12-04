<?php
/**
 * 授权
 */

namespace MercadoLibre\Native\Auth;


use MercadoLibre\Core\Client;
use MercadoLibre\Core\Response;
use MercadoLibre\Native\Model\SiteEnum;

class AuthClient extends Client{
	
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
		$this->url = $auth_url."/oauth/token?".http_build_query($params);
		$this->method = 'POST';
		$rsp_data = $this->sendData([]);
		return new AuthResponse(
			$rsp_data['error']?Response::RESULT_FAIL:Response::RESULT_SUCCESS,
			$rsp_data['cause'],
			$rsp_data['error']?$rsp_data['message']:'success',
			$rsp_data);
	}
	
	public function refreshAccessToken($refresh_token) {
		$auth_url = self::$API_ROOT_URL;
		$params = array(
			"grant_type"    => "refresh_token",
			"client_id"     => $this->client_id,
			"client_secret" => $this->client_secret,
			"refresh_token" => $refresh_token
		);
		$this->url = $auth_url."/oauth/token";
		$this->method = 'POST';
		$rsp_data = $this->sendData($params);
		return new AuthResponse(
			$rsp_data['error']?Response::RESULT_FAIL:Response::RESULT_SUCCESS,
			$rsp_data['cause'],
			$rsp_data['error']?$rsp_data['message']:'success',
			$rsp_data);
	}
}