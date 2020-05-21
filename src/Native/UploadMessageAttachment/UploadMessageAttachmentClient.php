<?php


namespace MercadoLibre\Native\UploadMessageAttachment;

use finfo;
use MercadoLibre\Core\Response;
use MercadoLibre\Native\NativeClient;

class UploadMessageAttachmentClient extends NativeClient {
	
	protected $method = self::METHOD_POST_FILE;
	protected $curl_option = array(
		CURLOPT_HTTPHEADER     => array(
			'Content-Disposition: form-data; name="file";'
		)
	);
	
	public function __construct(UploadMessageAttachmentParameter $parameter) {
		parent::__construct('/messages/attachments',$parameter);
	}

	public function send() {
		$param = $this->getParam();
		$file = $param->file;
		
		$fi = new finfo(FILEINFO_MIME_TYPE);
		$mime_type = $fi->file($file);
		$filename = basename($file);
		$cfile = curl_file_create($file,$mime_type,$filename);
		
		$rsp_data = $this->sendData(['file'=>$cfile]);
		
		return new UploadMessageAttachmentResponse(
			$rsp_data['message']?Response::RESULT_FAIL:Response::RESULT_SUCCESS,
			$rsp_data['cause'],
			$rsp_data['message']?$rsp_data['message']:'success',
			$rsp_data);
	}
}