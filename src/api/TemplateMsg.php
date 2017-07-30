<?php
/**
 * Created by PhpStorm.
 * User: Jiawei
 * Date: 2017/7/29
 * Time: 13:54
 */

namespace JiaweiXS\WeApp\Api;


class TemplateMsg extends BaseApi
{

	public function getListFromLib($offset,$count){
		$url = ApiUrl::TEMPLATE_MSG_LIST_FORM_LIB;
		$param = array(
			'offset'=>$offset,
			'count'=>$count,
		);
		return $this->sendRequestWithToken($url,$param);
	}

	public function getTempFromLib($id){
		$url = ApiUrl::TEMPLATE_MSG_GET_FORM_LIB;
		$param = array(
			'id'=>$id,
		);
		return $this->sendRequestWithToken($url,$param);
	}

	public function add($id,$keyword_id_array){
		$url = ApiUrl::TEMPLATE_MSG_ADD;
		$param = array(
			'id'=>$id,
			'keyword_id_list'=>$keyword_id_array,
		);
		return $this->sendRequestWithToken($url,$param);
	}

	public function getList($offset,$count){
		$url = ApiUrl::TEMPLATE_MSG_LIST;
		$param = array(
			'offset'=>$offset,
			'count'=>$count,
		);
		return $this->sendRequestWithToken($url,$param);
	}

	public function del($template_id){
		$url = ApiUrl::TEMPLATE_MSG_DEL;
		$param = array(
			'template_id'=>$template_id,
		);
		return $this->sendRequestWithToken($url,$param);
	}

	public function send($touser,$template_id,$form_id,$data,$page=null,$color=null,$emphasis_keyword=null){
		$url = ApiUrl::TEMPLATE_MSG_SEND;
		$param = array(
			'touser'=>$touser,
			'template_id'=>$template_id,
			'page'=>$page,
			'form_id'=>$form_id,
			'data'=>$data,
			'color'=>$color,
			'emphasis_keyword'=>$emphasis_keyword,
		);
		return $this->sendRequestWithToken($url,$param);
	}

}