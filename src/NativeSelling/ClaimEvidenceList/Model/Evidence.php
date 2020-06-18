<?php

namespace MercadoLibre\NativeSelling\ClaimEvidenceList\Model;


use MercadoLibre\NativeSelling\NativeSellingParameter;
/**
 * @property string date_shipped
 * @property string date_delivered
 * @property string destination_agency
 * @property string receiver_email
 * @property string receiver_id
 * @property string receiver_name
 * @property string shipping_company_name
 * @property string shipping_method
 * @property string tracking_number
 * @property string type
 * @property Attachment[] attachments
 * @property string handling_date
 */
class Evidence extends NativeSellingParameter
{
	
	public function __construct($data = [])
	{
		parent::__construct($data, array(
			'date_shipped'          => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'date_delivered'        => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'destination_agency'    => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'receiver_email'        => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'receiver_id'           => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'receiver_name'         => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'shipping_company_name' => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'shipping_method'       => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'tracking_number'       => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'type'                  => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'attachments'           => [self::PARAM_TYPE_ARRAY, self::PARAM_OPTIONAL, Attachment::class],
			'handling_date'         => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
		));
	}
}