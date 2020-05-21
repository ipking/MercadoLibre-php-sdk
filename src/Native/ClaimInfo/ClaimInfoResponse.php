<?php


namespace MercadoLibre\Native\ClaimInfo;

use MercadoLibre\Native\ClaimList\Model\ClaimInfo;
use MercadoLibre\Native\NativeErrorMsg;
use MercadoLibre\Native\NativeResponse;

/**
 * @property ClaimInfo claim
 */
class ClaimInfoResponse extends NativeResponse{
	public function __construct($result,$errors, $message = 'success', $data = []) {
		$msg = NativeErrorMsg::getMsg($errors);
		$msg and $message = $msg;
		parent::__construct($result,$errors, $message, $data, array(
			'claim' => [self::PARAM_TYPE_OBJECT, self::PARAM_OPTIONAL, ClaimInfo::class],
		));
	}
}
