<?php

namespace MercadoLibre\GlobalSelling\ItemsMarketplaceItemsGet;
use MercadoLibre\GlobalSelling\ItemsMarketplaceItemsGet\Model\MarketplaceItem;
use MercadoLibre\Base\BaseErrorMsg;
use MercadoLibre\Base\BaseResponse;

/**
 * @property string item_id
 * @property string user_id
 * @property string site_id
 * @property string date_created
 * @property MarketplaceItem[] marketplace_items
 * @property string parent_id
 * @property string parent_user_id
 */
class ItemsMarketplaceItemsGetResponse extends BaseResponse{
	public function __construct($result,$errors, $message = 'success', $data = []) {
		$msg = BaseErrorMsg::getMsg($errors);
		$msg and $message = $msg;
		parent::__construct($result,$errors, $message, $data, array(
			'item_id'           => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'user_id'           => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'site_id'           => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'date_created'      => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'marketplace_items' => [self::PARAM_TYPE_ARRAY, self::PARAM_OPTIONAL,MarketplaceItem::class],
			'parent_id'         => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'parent_user_id'    => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
		));
	}
}
