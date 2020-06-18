<?php


namespace MercadoLibre\NativeSelling\ClaimMessageList;


use MercadoLibre\NativeSelling\ClaimMessageList\Model\MessageInfo;
use MercadoLibre\NativeSelling\NativeSellingErrorMsg;
use MercadoLibre\NativeSelling\NativeSellingResponse;

/**
 * @property MessageInfo messages
 */
class ClaimMessageListResponse extends NativeSellingResponse{
	public function __construct($result,$errors, $message = 'success', $data = []) {
		$msg = NativeSellingErrorMsg::getMsg($errors);
		$msg and $message = $msg;
		parent::__construct($result,$errors, $message, $data, array(
			'messages' => [self::PARAM_TYPE_ARRAY, self::PARAM_OPTIONAL, MessageInfo::class],
		));
	}
}
