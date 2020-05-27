<?php


namespace MercadoLibre\Native\Shipments;

use MercadoLibre\Native\NativeParameter;

/**
 * @property String shipment_id
 * @property String speed
 * @property String status
 * @property String tracking_number
 * @property String receiver_id
 */
class ShipmentsParameter extends NativeParameter
{
	public function __construct($data = [])
	{
		parent::__construct($data, array(
			'shipment_id'     => [self::PARAM_TYPE_STRING, self::PARAM_REQUIRED],
			'speed'           => [self::PARAM_TYPE_STRING, self::PARAM_ISSET],
			'status'          => [self::PARAM_TYPE_STRING, self::PARAM_ISSET],
			'tracking_number' => [self::PARAM_TYPE_STRING, self::PARAM_ISSET],
			'receiver_id'     => [self::PARAM_TYPE_STRING, self::PARAM_ISSET],
		));
	}
}