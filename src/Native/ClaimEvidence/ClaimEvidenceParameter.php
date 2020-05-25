<?php


namespace MercadoLibre\Native\ClaimEvidence;

use MercadoLibre\Native\NativeParameter;

/**
 * @property String claim_id
 * @property array attachments
 * @property String date_shipped
 * @property String date_delivered
 * @property String destination_agency
 * @property String receiver_email
 * @property String receiver_id
 * @property String receiver_name
 * @property String shipping_company_name
 * @property String shipping_method
 * @property String tracking_number
 * @property String type
 * @property String handling_date
 */
class ClaimEvidenceParameter extends NativeParameter
{
	public function __construct($data = [])
	{
		parent::__construct($data, array(
			'claim_id'              => [self::PARAM_TYPE_STRING, self::PARAM_REQUIRED],
			'attachments'           => [self::PARAM_TYPE_ARRAY, self::PARAM_ISSET,self::PARAM_TYPE_STRING],
			'date_shipped'          => [self::PARAM_TYPE_STRING, self::PARAM_ISSET],
			'date_delivered'        => [self::PARAM_TYPE_STRING, self::PARAM_ISSET],
			'destination_agency'    => [self::PARAM_TYPE_STRING, self::PARAM_ISSET],
			'receiver_email'        => [self::PARAM_TYPE_STRING, self::PARAM_ISSET],
			'receiver_id'           => [self::PARAM_TYPE_STRING, self::PARAM_ISSET],
			'receiver_name'         => [self::PARAM_TYPE_STRING, self::PARAM_ISSET],
			'shipping_company_name' => [self::PARAM_TYPE_STRING, self::PARAM_ISSET],
			'shipping_method'       => [self::PARAM_TYPE_STRING, self::PARAM_ISSET],
			'tracking_number'       => [self::PARAM_TYPE_STRING, self::PARAM_ISSET],
			'type'                  => [self::PARAM_TYPE_STRING, self::PARAM_ISSET],
			'handling_date'         => [self::PARAM_TYPE_STRING, self::PARAM_ISSET],
		));
	}
}


