<?php
/**
 * 请求参数
 */

namespace MercadoLibre\Native;
use MercadoLibre\Core\Parameter;

class NativeParameter extends Parameter {
	public function __construct($data, $defines = []) {
		parent::__construct($data, $defines);
	}
}