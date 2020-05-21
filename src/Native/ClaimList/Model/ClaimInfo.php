<?php

namespace MercadoLibre\Native\ClaimList\Model;


use MercadoLibre\Native\NativeParameter;
/**
 * @property string id
 * @property string type
 * @property string stage
 * @property string status
 * @property string parent_id
 * @property string client_id
 * @property string resource_id
 * @property string resource
 * @property string reason_id
 * @property Player[] players
 * @property Resolution resolution
 * @property array labels
 * @property string site_id
 * @property string date_created
 * @property string last_updated
 */
class ClaimInfo extends NativeParameter
{
	public function __construct($data = [])
	{
		
		parent::__construct($data, array(
			'id'           => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'type'         => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'stage'        => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'status'       => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'parent_id'    => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'client_id'    => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'resource_id'  => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'resource'     => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'reason_id'    => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'players'      => [self::PARAM_TYPE_ARRAY, self::PARAM_OPTIONAL,Player::class],
			'resolution'   => [self::PARAM_TYPE_OBJECT, self::PARAM_OPTIONAL,Resolution::class],
			'labels'       => [self::PARAM_TYPE_ARRAY, self::PARAM_OPTIONAL,self::PARAM_TYPE_STRING],
			'site_id'      => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'date_created' => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'last_updated' => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
		));
	}
}
