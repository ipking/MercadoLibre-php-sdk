<?php


namespace MercadoLibre\GlobalSelling\MarketplaceMessagesAttachmentsGet;

use MercadoLibre\Base\BaseErrorMsg;
use MercadoLibre\Base\BaseResponse;

/**
 * @property string id
 */
class MarketplaceMessagesAttachmentsGetResponse extends BaseResponse{
	public function __construct($result,$errors, $message = 'success', $data = []) {
		$msg = BaseErrorMsg::getMsg($errors);
		$msg and $message = $msg;
		parent::__construct($result,$errors, $message, $data, array(
			'id' => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
		));
	}
}
