<?php


namespace MercadoLibre\Native\QuestionInfo;
use MercadoLibre\Native\Model\Paging;
use MercadoLibre\Native\NativeErrorMsg;
use MercadoLibre\Native\NativeResponse;
use MercadoLibre\Native\QuestionList\Model\QuestionInfo;

/**
 * @property QuestionInfo question
 */
class QuestionInfoResponse extends NativeResponse{
	public function __construct($result,$errors, $message = 'success', $data = []) {
		$msg = NativeErrorMsg::getMsg($errors);
		$msg and $message = $msg;
		parent::__construct($result,$errors, $message, $data, array(
			'question' => [self::PARAM_TYPE_OBJECT, self::PARAM_OPTIONAL, QuestionInfo::class],
		));
	}
}
