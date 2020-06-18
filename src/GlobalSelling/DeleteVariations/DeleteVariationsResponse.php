<?php
/**
 * 产品描述的响应
 */

namespace MercadoLibre\GlobalSelling\DeleteVariations;

use MercadoLibre\GlobalSelling\GlobalSellingErrorMsg;
use MercadoLibre\GlobalSelling\GlobalSellingResponse;

/**
 * @property string text
 * @property string plain_text
 */
class DeleteVariationsResponse extends GlobalSellingResponse{
	public function __construct($result,$errors, $message = 'success', $data = []) {
		$msg = GlobalSellingErrorMsg::getMsg($errors);
		$msg and $message = $msg;
		parent::__construct($result,$errors, $message, $data, array(
		));
	}
}
