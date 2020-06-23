<?php

namespace MercadoLibre\GlobalSelling\MarketplaceQuestionsSearchGet\Model;

use MercadoLibre\Base\BaseParameter;

/**
 * @property string date_created
 * @property string item_id
 * @property string seller_id
 * @property string status
 * @property string text
 * @property string id
 * @property string deleted_from_listing
 * @property string hold
 * @property Answer answer
 * @property From from
 */
class QuestionInfo extends BaseParameter
{
	public function __construct($data = [])
	{
		parent::__construct($data, array(
			'date_created'         => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'item_id'              => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'seller_id'            => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'status'               => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'text'                 => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'id'                   => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'deleted_from_listing' => [self::PARAM_TYPE_BOOL, self::PARAM_OPTIONAL],
			'hold'                 => [self::PARAM_TYPE_BOOL, self::PARAM_OPTIONAL],
			'from'                 => [self::PARAM_TYPE_OBJECT, self::PARAM_OPTIONAL, From::class],
			'answer'               => [self::PARAM_TYPE_OBJECT, self::PARAM_OPTIONAL, Answer::class],
		));
	}
}