<?php
namespace MercadoLibre\GlobalSelling\MarketplaceUsersGet;

use MercadoLibre\GlobalSelling\MarketplaceUsersGet\Model\Marketplace;
use MercadoLibre\Base\BaseErrorMsg;
use MercadoLibre\Base\BaseResponse;

/**
 * @property string user_id
 * @property string site_id
 * @property Marketplace[] marketplaces
 */
class MarketplaceUsersGetResponse extends BaseResponse{
	public function __construct($result,$errors, $message = 'success', $data = []) {
		$msg = BaseErrorMsg::getMsg($errors);
		$msg and $message = $msg;
		parent::__construct($result,$errors, $message, $data, array(
			'user_id'      => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'site_id'      => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'marketplaces' => [self::PARAM_TYPE_ARRAY, self::PARAM_OPTIONAL, Marketplace::class],
		));
	}
}
