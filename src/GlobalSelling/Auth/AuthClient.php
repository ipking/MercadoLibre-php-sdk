<?php
/**
 * 授权
 */

namespace MercadoLibre\GlobalSelling\Auth;


use MercadoLibre\Core\Client;
use MercadoLibre\Core\Response;

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
	
	public function getAuthUrl($redirect_uri) {
		$params = array("client_id" => $this->client_id, "response_type" => "code", "redirect_uri" => $redirect_uri);
		$auth_uri = "https://global-selling.mercadolibre.com/authorization?".http_build_query($params);
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
		$this->method = self::METHOD_POST_FIELD;
		$rsp_data = $this->sendData([]);
		return new AuthResponse(
			$rsp_data['message']?Response::RESULT_FAIL:Response::RESULT_SUCCESS,
			$rsp_data['cause'],
			$rsp_data['message']?$rsp_data['message']:'success',
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
		$this->method = self::METHOD_POST;
		$rsp_data = $this->sendData($params);
		return new AuthResponse(
			$rsp_data['message']?Response::RESULT_FAIL:Response::RESULT_SUCCESS,
			$rsp_data['cause'],
			$rsp_data['message']?$rsp_data['message']:'success',
			$rsp_data);
	}
}