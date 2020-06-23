<?php

namespace MercadoLibre\GlobalSelling\MarketplaceOrdersGet\Model;


use MercadoLibre\Base\BaseParameter;
use MercadoLibre\Base\Model\Id;

/**
 * @property string id
 * @property string order_id
 * @property string payer_id
 * @property Id collector
 * @property string card_id
 * @property string site_id
 * @property string reason
 * @property string payment_method_id
 * @property string currency_id
 * @property string installments
 * @property string issuer_id
 * @property AtmTransferReference atm_transfer_reference
 * @property string coupon_id
 * @property string activation_uri
 * @property string operation_type
 * @property string payment_type
 * @property string available_actions
 * @property string status
 * @property string status_code
 * @property string status_detail
 * @property string transaction_amount
 * @property string taxes_amount
 * @property string shipping_cost
 * @property string coupon_amount
 * @property string overpaid_amount
 * @property string total_paid_amount
 * @property string installment_amount
 * @property string deferred_period
 * @property string date_approved
 * @property string authorization_code
 * @property string transaction_order_id
 * @property string date_created
 * @property string date_last_modified
 */
class Payment extends BaseParameter
{
	public function __construct($data = [])
	{
		parent::__construct($data, array(
			'id'                     => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'order_id'               => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'payer_id'               => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'collector'              => [self::PARAM_TYPE_OBJECT, self::PARAM_OPTIONAL,Id::class],
			'card_id'                => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'site_id'                => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'reason'                 => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'payment_method_id'      => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'currency_id'            => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'installments'           => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'issuer_id'              => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'atm_transfer_reference' => [self::PARAM_TYPE_OBJECT, self::PARAM_OPTIONAL,AtmTransferReference::class],
			'coupon_id'              => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'activation_uri'         => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'operation_type'         => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'payment_type'           => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'available_actions'      => [self::PARAM_TYPE_ARRAY, self::PARAM_OPTIONAL,self::PARAM_TYPE_STRING],
			'status'                 => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'status_code'            => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'status_detail'          => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'transaction_amount'     => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'taxes_amount'           => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'shipping_cost'          => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'coupon_amount'          => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'overpaid_amount'        => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'total_paid_amount'      => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'installment_amount'     => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'deferred_period'        => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'date_approved'          => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'authorization_code'     => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'transaction_order_id'   => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'date_created'           => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'date_last_modified'     => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
		));
	}
}