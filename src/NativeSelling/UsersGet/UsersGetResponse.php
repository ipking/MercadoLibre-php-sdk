<?php
/**
 * 账号信息的响应
 */

namespace MercadoLibre\NativeSelling\UsersGet;
use MercadoLibre\NativeSelling\NativeSellingErrorMsg;
use MercadoLibre\NativeSelling\NativeSellingResponse;
use MercadoLibre\NativeSelling\UsersGet\Model\AddressParameter;
use MercadoLibre\NativeSelling\UsersGet\Model\IdentificationParameter;
use MercadoLibre\NativeSelling\UsersGet\Model\PhoneParameter;

/**
 * @property string id
 * @property string nickname
 * @property string registration_date
 * @property string first_name
 * @property string last_name
 * @property string country_id
 * @property string email
 * @property string logo
 * @property string points
 * @property string site_id
 * @property string permalink
 * @property string seller_experience
 * @property string user_type
 * @property IdentificationParameter identification
 * @property AddressParameter address
 * @property PhoneParameter phone
 */
class UsersGetResponse extends NativeSellingResponse{
	public function __construct($result,$errors, $message = 'success', $data = []) {
		$msg = NativeSellingErrorMsg::getMsg($errors);
		$msg and $message = $msg;
		parent::__construct($result,$errors, $message, $data, array(
			'id'                => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'nickname'          => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'registration_date' => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'first_name'        => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'last_name'         => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'country_id'        => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'email'             => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'logo'              => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'points'            => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'site_id'           => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'permalink'         => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'seller_experience' => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'user_type'         => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'identification'    => [self::PARAM_TYPE_OBJECT, self::PARAM_OPTIONAL, IdentificationParameter::class],
			'address'           => [self::PARAM_TYPE_OBJECT, self::PARAM_OPTIONAL, AddressParameter::class],
			'phone'             => [self::PARAM_TYPE_OBJECT, self::PARAM_OPTIONAL, PhoneParameter::class],
		));
	}
}
