<?php
/**
 * 响应
 */
namespace MercadoLibre\Base;

use MercadoLibre\Core\Response;


class BaseResponse extends Response {
	public function __construct($result,$errors, $message, $data, $define){
		parent::__construct($result,$errors, $message, $data, $define);
	}
}