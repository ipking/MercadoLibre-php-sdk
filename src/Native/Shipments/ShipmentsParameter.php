<?php


namespace MercadoLibre\Native\Shipments;

use MercadoLibre\Native\NativeParameter;

/**
 * @property String shipment_id
 */
class ShipmentsParameter extends NativeParameter
{
	public function __construct($data = [])
	{
		parent::__construct($data, array(
			'shipment_id' => [self::PARAM_TYPE_STRING, self::PARAM_REQUIRED],
		));
	}
}