### 安装
```
//install by composer
composer require jiaweixs/weapp
  
//or clone from github
git clone git@github.com:kulokai/weapp.git
```

### 用法
#####1. 创建小程序对象
```php
use JiaweiXS\WeApp\WeApp;
  
//创建一个小程序对象
$weapp = new WeApp('appid','secret','.../缓存的路径/');
  
//例如，在laravel,文件缓存路径为'../storage/cache/'
$weapp = new WeApp('wxc123...','123456...','../storage/cache/');
```
#####2. 通过客户端上传的code换取sessionkey
```php
//code 换取 session_key
$weapp->getSessionKey($code);
```
#####3. 其他接口的调用
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
$res_array = $templateMsg->send($touser,$template_id,$form_id,$data;
  
```