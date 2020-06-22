<?php
/**
 * 响应
 */
namespace MercadoLibre\GlobalSelling;

use MercadoLibre\Core\Response;


class GlobalSellingResponse extends Response {
	public function __construct($result,$errors, $message, $data, $define){
		parent::__construct($result,$errors, $message, $data, $define);
	}
}