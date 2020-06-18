<?php


namespace MercadoLibre\GlobalSelling\MessageCreate;
use MercadoLibre\GlobalSelling\MessageList\Model\MessageInfo;
use MercadoLibre\GlobalSelling\Model\Paging;
use MercadoLibre\GlobalSelling\GlobalSellingErrorMsg;
use MercadoLibre\GlobalSelling\GlobalSellingResponse;

/**
 * @property MessageInfo[] messages
 */
class MessageCreateResponse extends GlobalSellingResponse{
	public function __construct($result,$errors, $message = 'success', $data = []) {
		$msg = GlobalSellingErrorMsg::getMsg($errors);
		$msg and $message = $msg;
		parent::__construct($result,$errors, $message, $data, array(
			'messages' => [self::PARAM_TYPE_ARRAY, self::PARAM_OPTIONAL, MessageInfo::class],
		));
	}
}
