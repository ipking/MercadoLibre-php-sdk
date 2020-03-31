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
 * @property string user_answered_questions
 * @property string answer_text
 * @property string answer_status
 * @property string answer_date_created
 */
class QuestionInfo extends NativeParameter
{
	public function __construct($data = [])
	{
		$data['user_id'] = $data['from']['id'];
		$data['user_answered_questions'] = $data['from']['answered_questions'];
		$data['answer_text'] = $data['answer']['text'];
		$data['answer_status'] = $data['answer']['status'];
		$data['answer_date_created'] = $data['answer']['date_created'];
		
		unset($data['from']);
		unset($data['answer']);
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
			'answer_text'             => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'answer_status'           => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'answer_date_created'     => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
		));
	}
}

