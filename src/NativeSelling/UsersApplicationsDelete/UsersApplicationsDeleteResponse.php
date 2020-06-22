<?php


namespace MercadoLibre\NativeSelling\UsersApplicationsDelete;
use MercadoLibre\Base\BaseErrorMsg;
use MercadoLibre\Base\BaseResponse;

/**
 *  @property string user_id
 *  @property string app_id
 *  @property string msg
 */
class UsersApplicationsDeleteResponse extends BaseResponse{
	public function __construct($result,$errors, $message = 'success', $data = []) {
		$msg = BaseErrorMsg::getMsg($errors);
		$msg and $message = $msg;
		parent::__construct($result,$errors, $message, $data, array(
			'user_id' => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'app_id'  => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'msg'     => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
		));
	}
}