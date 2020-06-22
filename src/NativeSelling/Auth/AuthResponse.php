<?php


namespace MercadoLibre\NativeSelling\Auth;
use MercadoLibre\Base\BaseErrorMsg;
use MercadoLibre\Base\BaseResponse;

/**
 * @property string access_token
 * @property string token_type
 * @property string expires_in
 * @property string scope
 * @property string user_id
 * @property string refresh_token
 */
class AuthResponse extends BaseResponse{
	public function __construct($result,$errors, $message = 'success', $data = []) {
		$msg = BaseErrorMsg::getMsg($errors);
		$msg and $message = $msg;
		parent::__construct($result,$errors, $message, $data, array(
			'access_token'  => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'token_type'    => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'expires_in'    => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'scope'         => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'user_id'       => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'refresh_token' => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
		));
	}
}