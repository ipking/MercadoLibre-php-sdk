<?php


namespace MercadoLibre\GlobalSelling\ClaimMessageCreate;
use MercadoLibre\GlobalSelling\MessageList\Model\MessageInfo;
use MercadoLibre\GlobalSelling\Model\Paging;
use MercadoLibre\GlobalSelling\GlobalSellingErrorMsg;
use MercadoLibre\GlobalSelling\GlobalSellingResponse;

/**
 * @property string id
 */
class ClaimMessageCreateResponse extends GlobalSellingResponse{
	public function __construct($result,$errors, $message = 'success', $data = []) {
		$msg = GlobalSellingErrorMsg::getMsg($errors);
		$msg and $message = $msg;
		parent::__construct($result,$errors, $message, $data, array(
			'id' => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
		));
	}
}
