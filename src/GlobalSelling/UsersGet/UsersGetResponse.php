<?php
namespace MercadoLibre\GlobalSelling\UsersGet;

use MercadoLibre\GlobalSelling\UsersGet\Model\Marketplace;
use MercadoLibre\NativeSelling\NativeSellingErrorMsg;
use MercadoLibre\NativeSelling\NativeSellingResponse;

/**
 * @property string user_id
 * @property string site_id
 * @property Marketplace[] marketplaces
 */
class UsersGetResponse extends NativeSellingResponse{
	public function __construct($result,$errors, $message = 'success', $data = []) {
		$msg = NativeSellingErrorMsg::getMsg($errors);
		$msg and $message = $msg;
		parent::__construct($result,$errors, $message, $data, array(
			'user_id'      => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'site_id'      => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'marketplaces' => [self::PARAM_TYPE_ARRAY, self::PARAM_OPTIONAL, Marketplace::class],
		));
	}
}
