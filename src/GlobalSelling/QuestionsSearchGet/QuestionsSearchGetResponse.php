<?php

namespace MercadoLibre\GlobalSelling\QuestionsSearchGet;

use MercadoLibre\NativeSelling\Model\Paging;
use MercadoLibre\GlobalSelling\GlobalSellingErrorMsg;
use MercadoLibre\GlobalSelling\GlobalSellingResponse;
use MercadoLibre\GlobalSelling\QuestionsSearchGet\Model\QuestionInfo;

/**
 * @property QuestionInfo[] questions
 * @property Paging paging
 */
class QuestionsSearchGetResponse extends GlobalSellingResponse{
	public function __construct($result,$errors, $message = 'success', $data = []) {
		$msg = GlobalSellingErrorMsg::getMsg($errors);
		$msg and $message = $msg;
		parent::__construct($result,$errors, $message, $data, array(
			'questions' => [self::PARAM_TYPE_ARRAY, self::PARAM_OPTIONAL, QuestionInfo::class],
			'paging'    => [self::PARAM_TYPE_OBJECT, self::PARAM_OPTIONAL, Paging::class],
		));
	}
}
