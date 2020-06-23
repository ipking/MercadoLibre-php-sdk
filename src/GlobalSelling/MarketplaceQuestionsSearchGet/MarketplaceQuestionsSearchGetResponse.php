<?php

namespace MercadoLibre\GlobalSelling\MarketplaceQuestionsSearchGet;

use MercadoLibre\Base\Model\Paging;
use MercadoLibre\Base\BaseErrorMsg;
use MercadoLibre\Base\BaseResponse;
use MercadoLibre\GlobalSelling\MarketplaceQuestionsSearchGet\Model\QuestionInfo;

/**
 * @property QuestionInfo[] questions
 * @property Paging paging
 */
class MarketplaceQuestionsSearchGetResponse extends BaseResponse{
	public function __construct($result,$errors, $message = 'success', $data = []) {
		$msg = BaseErrorMsg::getMsg($errors);
		$msg and $message = $msg;
		parent::__construct($result,$errors, $message, $data, array(
			'questions' => [self::PARAM_TYPE_ARRAY, self::PARAM_OPTIONAL, QuestionInfo::class],
			'paging'    => [self::PARAM_TYPE_OBJECT, self::PARAM_OPTIONAL, Paging::class],
		));
	}
}
