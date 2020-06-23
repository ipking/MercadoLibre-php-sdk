<?php

namespace MercadoLibre\GlobalSelling\MarketplaceShipmentsLabelsGet;

use MercadoLibre\Base\BaseErrorMsg;
use MercadoLibre\Base\BaseResponse;

/**
 * @property string label
 */
class MarketplaceShipmentsLabelsGetResponse extends BaseResponse{
	public function __construct($result,$errors, $message = 'success', $data = []) {
		$msg = BaseErrorMsg::getMsg($errors);
		$msg and $message = $msg;
		parent::__construct($result,$errors, $message, $data, array(
			'label'       => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
		));
	}
}