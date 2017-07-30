## 安装
```
//install by composer
composer require jiaweixs/weapp
  
//or clone from github
git clone git@github.com:kulokai/weapp.git
```

## 用法
#### 1. 创建小程序对象
```php
use JiaweiXS\WeApp\WeApp;
  
//创建一个小程序对象
$weapp = new WeApp('appid','secret','.../缓存的路径/');
  
//例如，在laravel,文件缓存路径为'../storage/cache/'
$weapp = new WeApp('wxc123...','123456...','../storage/cache/');
```
#### 2. 通过客户端上传的code换取sessionkey
```php
//code 换取 session_key
$weapp->getSessionKey($code);
```
#### 3. 其他接口的调用
3.1 模板消息相关接口
```php
//从‘小程序’获取一个‘模板消息’单例对象
$templateMsg = $weapp.getTemplateMsg();
  
//1.获取小程序模板库标题列表
$res_array = $templateMsg->getListFromLib($offset,$count);
    
//2.获取模板库某个模板标题下关键词库
$res_array = $templateMsg->getTempFromLib($id);
    
//3.组合模板并添加至帐号下的个人模板库
$res_array = $templateMsg->add($id,$keyword_id_array);
  
//4.获取帐号下已存在的模板列表
$res_array = $templateMsg->getList($offset,$count);
  
//5.删除帐号下的某个模板
$res_array = $templateMsg->del($template_id);
  
//6.发送模板消息
$res_array = $templateMsg->send($touser,$template_id,$form_id,$data);
  
```
3.2 客服消息相关接口
```php
//从‘小程序’获取一个‘客服消息’单例对象
$customMsg = $weapp.getCustomMsg();
  
//1.发送客服消息 (微信对调用时机和次数都有限制，详情见微信文档)
$res_array = $customMsg->send($touser,$msgtype,$content_array);
  
```
3.3 二维码相关接口
```php
//从‘小程序’获取一个‘二维码’单例对象
$qrcode = $weapp.getQRCode();
  
//1.获取小程序A码
$res_array = $qrcode->getQRCodeA($path,$width=null,$auto_color=null,$line_color=null);
  
//2.获取小程序B码
$res_array = $qrcode->getQRCodeB($scene,$page,$width=null,$auto_color=null,$line_color=null);
  
//3.获取小程序C码(二维码)
$res_array = $qrcode->getQRCodeC($path,$width=null);
  
//注意数量限制 A码+C码：总共10万个 B码：无数量限制
```
3.4 数据统计相关接口
```php
//从‘小程序’获取一个‘数据统计’单例对象
$statistic = $weapp.getStatistic();
  
//1.获取每日数据概况趋势
$res_array = $statistic->getAbout($date);
  
//2.1 获取每日访问趋势
$res_array = $statistic->getVisitDaily($date);
  
//2.2 获取每周访问趋势
$res_array = $statistic->getVisitWeekly($begin_date,$end_date);
  
//2.3 获取每月访问趋势
$res_array = $statistic->getVisitMonthly($begin_date,$end_date);
  
//3. 获取每日访问分布
$res_array = $statistic->getDistribution($date);
  
//4.1 获取每日访问分布
$res_array = $statistic->getRetainDaily($date);
  
//4.2 获取每周访问分布
$res_array = $statistic->getRetainWeekly($begin_date,$end_date);
  
//4.3 获取每月访问分布
$res_array = $statistic->getRetainMonthly($begin_date,$end_date);
  
//5. 获取每日访问页面
$res_array = $statistic->getPage($date);
  
//6. 获取每日用户画像
$res_array = $statistic->getUserFeature($date);
  
```
## 参考文档
1. 微信小程序文档 https://mp.weixin.qq.com/debug/wxadoc/dev/api/
