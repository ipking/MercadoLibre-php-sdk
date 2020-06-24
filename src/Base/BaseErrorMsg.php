<?php
/**
 * 获取错误信息  统一处理错误信息
 */
namespace MercadoLibre\Base;


class BaseErrorMsg {
	
	public static function getMsg($errors){
		if(!$errors){
			return '';
		}
		$msg = '';
		foreach($errors as $error){
			$msg.= is_string($error)?$error:'['.$error['message'].']';
		}
		return $msg;
	}
}