<?php

namespace MercadoLibre\Native\QuestionList\Model;


use MercadoLibre\Native\NativeParameter;
/**
 * @property string date_created
 * @property string item_id
 * @property string seller_id
 * @property string status
 * @property string text
 * @property string id
 * @property string deleted_from_listing
 * @property string hold
 * @property string answer
 * @property string from_id
 * @property string from_answered_questions
 */
class QuestionInfo extends NativeParameter
{
	public function __construct($data = [])
	{
		$data['user_id'] = $data['from']['id'];
		$data['user_answered_questions'] = $data['from']['answered_questions'];
		parent::__construct($data, array(
			'date_created'            => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'item_id'                 => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'seller_id'               => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'status'                  => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'text'                    => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'id'                      => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'deleted_from_listing'    => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'hold'                    => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'answer'                  => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'user_id'                 => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'user_answered_questions' => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
		));
	}
}

