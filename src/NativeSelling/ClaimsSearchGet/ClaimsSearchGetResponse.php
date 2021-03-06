<?php


namespace MercadoLibre\NativeSelling\ClaimsSearchGet;

use MercadoLibre\NativeSelling\ClaimsSearchGet\Model\ClaimInfo;
use MercadoLibre\Base\Model\Paging;
use MercadoLibre\Base\BaseErrorMsg;
use MercadoLibre\Base\BaseResponse;

/**
 * @property ClaimInfo[] claims
 * @property Paging paging
 */
class ClaimsSearchGetResponse extends BaseResponse{
	public function __construct($result,$errors, $message = 'success', $data = []) {
		$msg = BaseErrorMsg::getMsg($errors);
		$msg and $message = $msg;
		parent::__construct($result,$errors, $message, $data, array(
			'claims' => [self::PARAM_TYPE_ARRAY, self::PARAM_OPTIONAL, ClaimInfo::class],
			'paging'   => [self::PARAM_TYPE_OBJECT, self::PARAM_OPTIONAL, Paging::class],
		));
	}
}
