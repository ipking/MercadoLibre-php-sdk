<?php


namespace MercadoLibre\NativeSelling\QuestionList;
use MercadoLibre\NativeSelling\Model\Paging;
use MercadoLibre\NativeSelling\NativeSellingErrorMsg;
use MercadoLibre\NativeSelling\NativeSellingResponse;
use MercadoLibre\NativeSelling\QuestionList\Model\QuestionInfo;

/**
 * @property QuestionInfo[] questions
 * @property Paging paging
 */
class QuestionListResponse extends NativeSellingResponse{
	public function __construct($result,$errors, $message = 'success', $data = []) {
		$msg = NativeSellingErrorMsg::getMsg($errors);
		$msg and $message = $msg;
		parent::__construct($result,$errors, $message, $data, array(
			'questions' => [self::PARAM_TYPE_ARRAY, self::PARAM_OPTIONAL, QuestionInfo::class],
			'paging'   => [self::PARAM_TYPE_OBJECT, self::PARAM_OPTIONAL, Paging::class],
		));
	}
}
