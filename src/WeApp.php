<?php
/**
 * Created by PhpStorm.
 * User: Jiawei
 * Date: 2017/7/29
 * Time: 10:04
 */

namespace JiaweiXS\WeApp;


use JiaweiXS\WeApp\Api\QRCode;
use JiaweiXS\WeApp\Api\Statistic;
use JiaweiXS\WeApp\Api\TemplateMsg;
use JiaweiXS\SimpleCache\SimpleCache;

class WeApp
{
	private $appid;
	private $secret;
	private $instance;

	public function __construct($appid,$secret,$token_cache_dir){
		$this->appid = $appid;
		$this->secret = $secret;
		$this->instance = [];
		SimpleCache::init($token_cache_dir);
	}

	/**
	 * @return TemplateMsg 模板消息接口
	 */
	public function getTemplateMsg(){
		if(!isset($this->instance['template'])){
			$this->instance['template'] = new TemplateMsg($this->appid,$this->secret);
		}
		return $this->instance['template'];
	}

	/**
	 * @return QRCode 获取二维码接口
	 */
	public function getQRCode(){
		if(!isset($this->instance['qrcode'])){
			$this->instance['qrcode'] = new QRCode($this->appid,$this->secret);
		}
		return $this->instance['qrcode'];
	}

	/**
	 * @return Statistic 数据统计接口
	 */
	public function getStatistic(){
		if(!isset($this->instance['statistic'])){
			$this->instance['statistic'] = new Statistic($this->appid,$this->secret);
		}
		return $this->instance['statistic'];
	}

}