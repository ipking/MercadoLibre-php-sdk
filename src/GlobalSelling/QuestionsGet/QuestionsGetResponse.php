<?php


namespace MercadoLibre\GlobalSelling\QuestionsGet;
use MercadoLibre\GlobalSelling\GlobalSellingErrorMsg;
use MercadoLibre\GlobalSelling\GlobalSellingResponse;
use MercadoLibre\GlobalSelling\QuestionsSearchGet\Model\QuestionInfo;

/**
 * @property QuestionInfo question
 */
class QuestionsGetResponse extends GlobalSellingResponse{
	public function __construct($result,$errors, $message = 'success', $data = []) {
		$msg = GlobalSellingErrorMsg::getMsg($errors);
		$msg and $message = $msg;
		parent::__construct($result,$errors, $message, $data, array(
			'question' => [self::PARAM_TYPE_OBJECT, self::PARAM_OPTIONAL, QuestionInfo::class],
		));
	}
}
