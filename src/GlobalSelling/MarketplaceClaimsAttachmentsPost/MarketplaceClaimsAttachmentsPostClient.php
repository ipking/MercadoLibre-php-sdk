<?php


namespace MercadoLibre\GlobalSelling\MarketplaceClaimsAttachmentsPost;

use finfo;
use MercadoLibre\Core\Response;
use MercadoLibre\Base\BaseClient;

class MarketplaceClaimsAttachmentsPostClient extends BaseClient {
	
	protected $method = self::METHOD_POST_FILE;
	protected $curl_option = array(
		CURLOPT_HTTPHEADER     => array(
			'Content-Disposition: form-data; name="file";'
		)
	);
	
	public function __construct(MarketplaceClaimsAttachmentsPostParameter $parameter) {
		parent::__construct('/marketplace/claims/'.$parameter->claim_id.'/attachments',$parameter);
	}

	public function send() {
		$param = $this->getParam();
		/**
		 * @var MarketplaceClaimsAttachmentsPostParameter $param
		 */
		$file = $param->file;
		
		$fi = new finfo(FILEINFO_MIME_TYPE);
		$mime_type = $fi->file($file);
		$filename = basename($file);
		$cfile = curl_file_create($file,$mime_type,$filename);
		
		$rsp_data = $this->sendData(['file'=>$cfile]);
		
		return new MarketplaceClaimsAttachmentsPostResponse(
			$rsp_data['message']?Response::RESULT_FAIL:Response::RESULT_SUCCESS,
			$rsp_data['cause'],
			$rsp_data['message']?$rsp_data['message']:'success',
			$rsp_data);
	}
}