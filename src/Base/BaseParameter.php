<?php
/**
 * 请求参数
 */

namespace MercadoLibre\Base;
use MercadoLibre\Core\Parameter;

class BaseParameter extends Parameter {
	public function __construct($data, $defines = []) {
		parent::__construct($data, $defines);
	}
}