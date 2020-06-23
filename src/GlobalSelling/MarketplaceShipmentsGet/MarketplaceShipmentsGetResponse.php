<?php


namespace MercadoLibre\GlobalSelling\MarketplaceShipmentsGet;

use MercadoLibre\Base\BaseErrorMsg;
use MercadoLibre\Base\BaseResponse;
use MercadoLibre\GlobalSelling\MarketplaceShipmentsGet\Model\Shipment;

/**
 * @property Shipment shipment
 */
class MarketplaceShipmentsGetResponse extends BaseResponse{
	public function __construct($result,$errors, $message = 'success', $data = []) {
		$msg = BaseErrorMsg::getMsg($errors);
		$msg and $message = $msg;
		parent::__construct($result,$errors, $message, $data, array(
			'shipment'       => [self::PARAM_TYPE_OBJECT, self::PARAM_OPTIONAL,Shipment::class],
		));
	}
}