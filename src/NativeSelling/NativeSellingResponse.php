<?php
/**
 * 响应
 */
namespace MercadoLibre\NativeSelling;

use MercadoLibre\Core\Response;


class NativeSellingResponse extends Response {
	public function __construct($result,$errors, $message, $data, $define){
		parent::__construct($result,$errors, $message, $data, $define);
	}
}