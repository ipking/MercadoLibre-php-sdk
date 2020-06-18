<?php
/**
 * 产品图片
 */

namespace MercadoLibre\NativeSelling\Pictures;
use MercadoLibre\Core\Response;
use MercadoLibre\NativeSelling\NativeSellingClient;

class PicturesClient extends NativeSellingClient {
	
	protected $method = self::METHOD_GET;
	
	public function __construct(PicturesParameter $parameter) {
		parent::__construct('/pictures/'.$parameter->picture_id,$parameter);
	}

	public function send() {
		$rsp_data = parent::send();
		return new PicturesResponse(
			$rsp_data['error']?Response::RESULT_FAIL:Response::RESULT_SUCCESS,
			$rsp_data['cause'],
			$rsp_data['error']?$rsp_data['message']:'success',
			$rsp_data);
	}
}