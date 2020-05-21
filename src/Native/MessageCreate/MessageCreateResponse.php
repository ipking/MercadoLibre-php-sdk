<?php


namespace MercadoLibre\Native\MessageCreate;
use MercadoLibre\Native\MessageList\Model\MessageInfo;
use MercadoLibre\Native\Model\Paging;
use MercadoLibre\Native\NativeErrorMsg;
use MercadoLibre\Native\NativeResponse;

/**
 * @property MessageInfo[] messages
 */
class MessageCreateResponse extends NativeResponse{
	public function __construct($result,$errors, $message = 'success', $data = []) {
		$msg = NativeErrorMsg::getMsg($errors);
		$msg and $message = $msg;
		parent::__construct($result,$errors, $message, $data, array(
			'messages' => [self::PARAM_TYPE_ARRAY, self::PARAM_OPTIONAL, MessageInfo::class],
		));
	}
}
