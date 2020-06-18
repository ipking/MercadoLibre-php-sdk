<?php


namespace MercadoLibre\GlobalSelling\ClaimList;
use MercadoLibre\Core\Response;
use MercadoLibre\GlobalSelling\GlobalSellingClient;

class ClaimListClient extends GlobalSellingClient {
	
	protected $method = self::METHOD_GET;
	
	public function __construct(ClaimListParameter $parameter) {
		$param = [
			'offset'       => $parameter->offset,
			'limit'        => $parameter->limit,
			'id'           => $parameter->id,
			'type'         => $parameter->type,
			'stage'        => $parameter->stage,
			'status'       => $parameter->status,
			'resource_id'  => $parameter->resource_id,
			'resource'     => $parameter->resource,
			'reason_id'    => $parameter->reason_id,
			'site_id'      => $parameter->site_id,
			'order_id'     => $parameter->order_id,
			'payment_id'   => $parameter->payment_id,
			'parent_id'    => $parameter->parent_id,
			'date_created' => $parameter->date_created,
			'last_updated' => $parameter->last_updated,
		];
		
		parent::__construct('/v1/claims/search?'.http_build_query(array_filter($param)),$parameter);
	}

	public function send() {
		$rsp_data = parent::send();
		$rsp_data['claims'] = $rsp_data['data'];
		return new ClaimListResponse(
			$rsp_data['error']?Response::RESULT_FAIL:Response::RESULT_SUCCESS,
			$rsp_data['cause'],
			$rsp_data['error']?$rsp_data['message']:'success',
			$rsp_data);
	}
}