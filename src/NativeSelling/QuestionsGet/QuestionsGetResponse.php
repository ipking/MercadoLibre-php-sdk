<?php


namespace MercadoLibre\NativeSelling\QuestionsGet;
use MercadoLibre\NativeSelling\NativeSellingErrorMsg;
use MercadoLibre\NativeSelling\NativeSellingResponse;
use MercadoLibre\NativeSelling\QuestionsSearchGet\Model\QuestionInfo;

/**
 * @property QuestionInfo question
 */
class QuestionsGetResponse extends NativeSellingResponse{
	public function __construct($result,$errors, $message = 'success', $data = []) {
		$msg = NativeSellingErrorMsg::getMsg($errors);
		$msg and $message = $msg;
		parent::__construct($result,$errors, $message, $data, array(
			'question' => [self::PARAM_TYPE_OBJECT, self::PARAM_OPTIONAL, QuestionInfo::class],
		));
	}
}
