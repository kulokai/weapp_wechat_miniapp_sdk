<?php
/**
 * Created by PhpStorm.
 * User: Jiawei
 * Date: 2017/7/30
 * Time: 11:16
 */

namespace JiaweiXS\WeApp\Api;


class SessionKey extends BaseApi
{
	public function get($code){
		$url = ApiUrl::SESSION_KEY;
		$param = array(
			'appid'=>$this->appid,
			'secret'=>$this->secret,
			'js_code'=>$code,
			'grant_type'=>'authorization_code',
		);
		return $this->sendHttpRequest($url,null,$param,false);
	}
}