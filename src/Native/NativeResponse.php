<?php
/**
 * 响应
 */
namespace MercadoLibre\Native;

use MercadoLibre\Core\Response;


class NativeResponse extends Response {
	public function __construct($result,$errors, $message, $data, $define){
		parent::__construct($result,$errors, $message, $data, $define);
	}
}