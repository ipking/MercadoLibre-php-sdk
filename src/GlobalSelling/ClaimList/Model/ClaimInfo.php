<?php

namespace MercadoLibre\GlobalSelling\ClaimList\Model;


use MercadoLibre\GlobalSelling\GlobalSellingParameter;
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
 * @property Label[] labels
 * @property Coverage[] coverages
 * @property string site_id
 * @property string date_created
 * @property string last_updated
 */
class ClaimInfo extends GlobalSellingParameter
{
	/**
	complainant: person who starts the claim.
	respondent: person the claim is filed against.
	mediator: Person who intervenes to help solve the problem
	 */
	const ROLE_COMPLAINANT = 'complainant';
	const ROLE_RESPONDENT = 'respondent';
	const ROLE_MEDIATOR = 'mediator';
	
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
			'players'      => [self::PARAM_TYPE_ARRAY, self::PARAM_OPTIONAL, Player::class],
			'resolution'   => [self::PARAM_TYPE_OBJECT, self::PARAM_OPTIONAL, Resolution::class],
			'labels'       => [self::PARAM_TYPE_ARRAY, self::PARAM_OPTIONAL, Label::class],
			'coverages'    => [self::PARAM_TYPE_ARRAY, self::PARAM_OPTIONAL, Coverage::class],
			'site_id'      => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'date_created' => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'last_updated' => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
		));
	}
}
