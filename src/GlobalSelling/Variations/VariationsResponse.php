<?php
/**
 * 产品变体的响应
 */

namespace MercadoLibre\GlobalSelling\Variations;
use MercadoLibre\GlobalSelling\GlobalSellingErrorMsg;
use MercadoLibre\GlobalSelling\GlobalSellingResponse;
use MercadoLibre\GlobalSelling\Variations\Model\Variation;

/**
 * @property Variation variation
 */
class VariationsResponse extends GlobalSellingResponse{
	public function __construct($result,$errors, $message = 'success', $data = []) {
		$msg = GlobalSellingErrorMsg::getMsg($errors);
		$msg and $message = $msg;
		parent::__construct($result,$errors, $message, $data, array(
			'variation'   => [self::PARAM_TYPE_OBJECT, self::PARAM_OPTIONAL,Variation::class],
		));
	}
}
