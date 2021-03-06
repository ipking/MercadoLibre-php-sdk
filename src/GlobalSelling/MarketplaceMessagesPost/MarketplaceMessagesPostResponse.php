<?php


namespace MercadoLibre\GlobalSelling\MarketplaceMessagesPost;
use MercadoLibre\GlobalSelling\MarketplaceMessagesPacksGet\Model\MessageInfo;
use MercadoLibre\Base\BaseErrorMsg;
use MercadoLibre\Base\BaseResponse;

/**
 * @property MessageInfo[] messages
 */
class MarketplaceMessagesPostResponse extends BaseResponse{
	public function __construct($result,$errors, $message = 'success', $data = []) {
		$msg = BaseErrorMsg::getMsg($errors);
		$msg and $message = $msg;
		parent::__construct($result,$errors, $message, $data, array(
			'messages' => [self::PARAM_TYPE_ARRAY, self::PARAM_OPTIONAL, MessageInfo::class],
		));
	}
}
