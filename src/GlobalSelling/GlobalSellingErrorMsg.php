<?php
/**
 * 获取错误信息  统一处理错误信息
 */
namespace MercadoLibre\GlobalSelling;


class GlobalSellingErrorMsg {
	
	public static function getMsg($errors){
		if(!$errors){
			return '';
		}
		$msg = '';
		foreach($errors as $error){
			$msg.= '['.$error['message'].']';
		}
		return $msg;
	}
}