<?php

namespace MercadoLibre\Native\ClaimList\Model;


use MercadoLibre\Native\NativeParameter;
/**
 * @property string name
 * @property string value
 * @property string comments
 * @property string admin_id
 * @property string date_created
 */
class Label extends NativeParameter
{
	public function __construct($data = [])
	{
		
		parent::__construct($data, array(
			'name'         => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'value'        => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'comments'     => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'admin_id'     => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'date_created' => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
		));
	}
}
