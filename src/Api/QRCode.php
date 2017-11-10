<?php
/**
 * Created by PhpStorm.
 * User: Jiawei
 * Date: 2017/7/29
 * Time: 19:06
 */

namespace JiaweiXS\WeApp\Api;


class QRCode extends BaseApi
{
	public function getQRCodeA($path,$width=null,$auto_color=null,$line_color=null){
		$url = ApiUrl::GET_APP_CODE_A;
		$param = array(
			'path'=>$path,
			'width'=>$width,
			'auto_color'=>$auto_color,
			'line_color'=>$line_color,
		);
		return $this->sendRequestWithToken($url,$param);
	}

	public function getQRCodeB($scene,$page,$width=null,$auto_color=null,$line_color=null){
		$url = ApiUrl::GET_APP_CODE_B;
		$param = array(
			'scene'=>$scene,
			'page'=>$page,
			'width'=>$width,
			'auto_color'=>$auto_color,
			'line_color'=>$line_color,
		);
		return $this->sendRequestWithToken($url,$param);
	}

	public function getQRCodeC($path,$width=null){
		$url = ApiUrl::GET_QR_CODE_C;
		$param = array(
			'path'=>$path,
			'width'=>$width,
		);
		return $this->sendRequestWithToken($url,$param);
	}


}