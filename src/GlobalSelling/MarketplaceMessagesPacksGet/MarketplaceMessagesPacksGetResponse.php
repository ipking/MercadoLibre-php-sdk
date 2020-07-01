<?php


namespace MercadoLibre\GlobalSelling\MarketplaceMessagesPacksGet;
use MercadoLibre\GlobalSelling\MarketplaceMessagesPacksGet\Model\MessageInfo;
use MercadoLibre\Base\Model\Paging;
use MercadoLibre\Base\BaseErrorMsg;
use MercadoLibre\Base\BaseResponse;

/**
 * @property MessageInfo[] messages
 * @property Paging paging
 */
class MarketplaceMessagesPacksGetResponse extends BaseResponse{
	public function __construct($result,$errors, $message = 'success', $data = []) {
		$msg = BaseErrorMsg::getMsg($errors);
		$msg and $message = $msg;
		parent::__construct($result,$errors, $message, $data, array(
			'messages' => [self::PARAM_TYPE_ARRAY, self::PARAM_OPTIONAL, MessageInfo::class],
			'paging'   => [self::PARAM_TYPE_OBJECT, self::PARAM_OPTIONAL, Paging::class],
		));
	}
}
