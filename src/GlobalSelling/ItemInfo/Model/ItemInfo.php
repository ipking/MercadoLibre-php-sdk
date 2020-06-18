<?php

namespace MercadoLibre\GlobalSelling\ItemInfo\Model;


use MercadoLibre\GlobalSelling\GlobalSellingParameter;
/**
 * @property string id
 * @property string site_id
 * @property string title
 * @property string subtitle
 * @property string seller_id
 * @property string category_id
 * @property string official_store_id
 * @property string price
 * @property string base_price
 * @property string original_price
 * @property string inventory_id
 * @property string currency_id
 * @property string initial_quantity
 * @property string available_quantity
 * @property string sold_quantity
 * @property string buying_mode
 * @property string listing_type_id
 * @property string start_time
 * @property string stop_time
 * @property string end_time
 * @property string expiration_time
 * @property string condition
 * @property string permalink
 * @property string thumbnail
 * @property string secure_thumbnail
 * @property string video_id
 * @property string accepts_mercadopago
 * @property string international_delivery_mode
 * @property string seller_contact
 * @property string listing_source
 * @property string status
 * @property string warranty
 * @property string catalog_product_id
 * @property string domain_id
 * @property string seller_custom_field
 * @property string parent_item_id
 * @property string differential_pricing
 * @property string automatic_relist
 * @property string date_created
 * @property string last_updated
 * @property string health
 * @property string catalog_listing
 * @property array tags
 * @property Picture[] pictures
 * @property Attribute[] attributes
 * @property Variation[] variations
 */
class ItemInfo extends GlobalSellingParameter
{
	public function __construct($data = [])
	{
		parent::__construct($data, array(
			'id'                          => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'site_id'                     => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'title'                       => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'subtitle'                    => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'seller_id'                   => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'category_id'                 => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'official_store_id'           => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'price'                       => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'base_price'                  => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'original_price'              => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'inventory_id'                => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'currency_id'                 => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'initial_quantity'            => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'available_quantity'          => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'sold_quantity'               => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'buying_mode'                 => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'listing_type_id'             => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'start_time'                  => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'stop_time'                   => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'end_time'                    => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'expiration_time'             => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'condition'                   => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'permalink'                   => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'thumbnail'                   => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'secure_thumbnail'            => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'video_id'                    => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'accepts_mercadopago'         => [self::PARAM_TYPE_BOOL, self::PARAM_OPTIONAL],
			'international_delivery_mode' => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'seller_contact'              => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'listing_source'              => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'status'                      => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'warranty'                    => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'catalog_product_id'          => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'domain_id'                   => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'seller_custom_field'         => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'parent_item_id'              => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'differential_pricing'        => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'automatic_relist'            => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'date_created'                => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'last_updated'                => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'health'                      => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'catalog_listing'             => [self::PARAM_TYPE_STRING, self::PARAM_OPTIONAL],
			'tags'                        => [self::PARAM_TYPE_ARRAY, self::PARAM_OPTIONAL, self::PARAM_TYPE_STRING],
			'pictures'                    => [self::PARAM_TYPE_ARRAY, self::PARAM_OPTIONAL, Picture::class],
			'attributes'                  => [self::PARAM_TYPE_ARRAY, self::PARAM_OPTIONAL, Attribute::class],
			'variations'                  => [self::PARAM_TYPE_ARRAY, self::PARAM_OPTIONAL, Variation::class],
		));
	}
}