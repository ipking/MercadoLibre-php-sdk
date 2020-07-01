<?php

namespace MercadoLibre\GlobalSelling\MarketplaceOrdersGet\Model;


use MercadoLibre\Base\BaseParameter;

/**
 * @property string id
 * @property string date_created
 * @property string date_closed
 * @property string last_updated
 * @property string manufacturing_ending_date
 * @property Feedback feedback
 * @property Mediation[] mediations
 * @property string comments
 * @property string pack_id
 * @property string pickup_id
 * @property OrderRequest order_request
 * @property string fulfilled
 * @property string paid_amount
 * @property Coupon coupon
 * @property string expiration_date
 * @property OrderItem[] order_items
 * @property string currency_id
 * @property Payment payments
 * @property Shipping shipping
 * @property string status
 * @property StatusDetail status_detail
 * @property Buyer buyer
 * @property Seller seller
 * @property Taxes taxes
 */
class OrderInfo extends BaseParameter
{
	public function __construct($data = [])
	{
		parent::__construct($data, array(
			'id'                        => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'date_created'              => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'date_closed'               => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'last_updated'              => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'manufacturing_ending_date' => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'feedback'                  => [self::PARAM_TYPE_OBJECT, self::PARAM_OPTIONAL, Feedback::class],
			'mediations'                => [self::PARAM_TYPE_ARRAY, self::PARAM_OPTIONAL, Mediation::class],
			'comments'                  => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'pack_id'                   => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'pickup_id'                 => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'order_request'             => [self::PARAM_TYPE_OBJECT, self::PARAM_OPTIONAL, OrderRequest::class],
			'fulfilled'                 => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'paid_amount'               => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'coupon'                    => [self::PARAM_TYPE_OBJECT, self::PARAM_OPTIONAL, Coupon::class],
			'expiration_date'           => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'order_items'               => [self::PARAM_TYPE_ARRAY, self::PARAM_OPTIONAL, OrderItem::class],
			'currency_id'               => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'payments'                  => [self::PARAM_TYPE_ARRAY, self::PARAM_OPTIONAL, Payment::class],
			'shipping'                  => [self::PARAM_TYPE_OBJECT, self::PARAM_OPTIONAL, Shipping::class],
			'status'                    => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'status_detail'             => [self::PARAM_TYPE_OBJECT, self::PARAM_OPTIONAL, StatusDetail::class],
			'buyer'                     => [self::PARAM_TYPE_OBJECT, self::PARAM_OPTIONAL, Buyer::class],
			'seller'                    => [self::PARAM_TYPE_OBJECT, self::PARAM_OPTIONAL, Seller::class],
			'taxes'                     => [self::PARAM_TYPE_OBJECT, self::PARAM_OPTIONAL, Taxes::class],
		));
	}
}
