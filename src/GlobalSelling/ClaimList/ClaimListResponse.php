<?php


namespace MercadoLibre\GlobalSelling\ClaimList;

use MercadoLibre\GlobalSelling\ClaimList\Model\ClaimInfo;
use MercadoLibre\GlobalSelling\Model\Paging;
use MercadoLibre\GlobalSelling\GlobalSellingErrorMsg;
use MercadoLibre\GlobalSelling\GlobalSellingResponse;

/**
 * @property ClaimInfo[] claims
 * @property Paging paging
 */
class ClaimListResponse extends GlobalSellingResponse{
	public function __construct($result,$errors, $message = 'success', $data = []) {
		$msg = GlobalSellingErrorMsg::getMsg($errors);
		$msg and $message = $msg;
		parent::__construct($result,$errors, $message, $data, array(
			'claims' => [self::PARAM_TYPE_ARRAY, self::PARAM_OPTIONAL, ClaimInfo::class],
			'paging'   => [self::PARAM_TYPE_OBJECT, self::PARAM_OPTIONAL, Paging::class],
		));
	}
}
