<?php


namespace MercadoLibre\GlobalSelling\MarketplaceQuestionsGet;
use MercadoLibre\Base\BaseErrorMsg;
use MercadoLibre\Base\BaseResponse;
use MercadoLibre\GlobalSelling\MarketplaceQuestionsSearchGet\Model\QuestionInfo;

/**
 * @property QuestionInfo question
 */
class MarketplaceQuestionsGetResponse extends BaseResponse{
	public function __construct($result,$errors, $message = 'success', $data = []) {
		$msg = BaseErrorMsg::getMsg($errors);
		$msg and $message = $msg;
		parent::__construct($result,$errors, $message, $data, array(
			'question' => [self::PARAM_TYPE_OBJECT, self::PARAM_OPTIONAL, QuestionInfo::class],
		));
	}
}
