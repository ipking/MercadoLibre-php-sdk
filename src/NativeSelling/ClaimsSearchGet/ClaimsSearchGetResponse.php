<?php


namespace MercadoLibre\NativeSelling\ClaimsSearchGet;

use MercadoLibre\NativeSelling\ClaimsSearchGet\Model\ClaimInfo;
use MercadoLibre\NativeSelling\Model\Paging;
use MercadoLibre\NativeSelling\NativeSellingErrorMsg;
use MercadoLibre\NativeSelling\NativeSellingResponse;

/**
 * @property ClaimInfo[] claims
 * @property Paging paging
 */
class ClaimsSearchGetResponse extends NativeSellingResponse{
	public function __construct($result,$errors, $message = 'success', $data = []) {
		$msg = NativeSellingErrorMsg::getMsg($errors);
		$msg and $message = $msg;
		parent::__construct($result,$errors, $message, $data, array(
			'claims' => [self::PARAM_TYPE_ARRAY, self::PARAM_OPTIONAL, ClaimInfo::class],
			'paging'   => [self::PARAM_TYPE_OBJECT, self::PARAM_OPTIONAL, Paging::class],
		));
	}
}
