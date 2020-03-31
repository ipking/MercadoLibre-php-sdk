<?php
/**
 * 订单列表的响应
 */

namespace MercadoLibre\Native\QuestionList;
use MercadoLibre\Native\Model\Paging;
use MercadoLibre\Native\NativeErrorMsg;
use MercadoLibre\Native\NativeResponse;
use MercadoLibre\Native\QuestionList\Model\QuestionInfo;

/**
 * @property QuestionInfo[] questions
 * @property Paging paging
 */
class QuestionListResponse extends NativeResponse{
	public function __construct($result,$errors, $message = 'success', $data = []) {
		$msg = NativeErrorMsg::getMsg($errors);
		$msg and $message = $msg;
		parent::__construct($result,$errors, $message, $data, array(
			'questions' => [self::PARAM_TYPE_ARRAY, self::PARAM_OPTIONAL, QuestionInfo::class],
			'paging'   => [self::PARAM_TYPE_OBJECT, self::PARAM_OPTIONAL, Paging::class],
		));
	}
}
