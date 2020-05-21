<?php


namespace MercadoLibre\Native\ClaimMessageList;


use MercadoLibre\Native\ClaimMessageList\Model\MessageInfo;
use MercadoLibre\Native\NativeErrorMsg;
use MercadoLibre\Native\NativeResponse;

/**
 * @property MessageInfo messages
 */
class ClaimMessageListResponse extends NativeResponse{
	public function __construct($result,$errors, $message = 'success', $data = []) {
		$msg = NativeErrorMsg::getMsg($errors);
		$msg and $message = $msg;
		parent::__construct($result,$errors, $message, $data, array(
			'messages' => [self::PARAM_TYPE_ARRAY, self::PARAM_OPTIONAL, MessageInfo::class],
		));
	}
}
