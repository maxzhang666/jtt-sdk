<h1 align="center"> 京推推SDK</h1>

<p align="center"> 基于京推推开放平台Api封装的 Composer Package 组件包.</p>

## 目录结构：
- src **项目目录**

## 安装：

```
$ composer require maxzhang/jtt-sdk
```

## 使用方法(参考suning-sdk):
```php
use MaxZhang\JttSdk\Request\Update\GoodsListRequest;
use MaxZhang\JttSdk\DefaultJttClient;
```
```php
$req = new GoodsListRequest();
$assertArray = [
    'appid' => '123',
    'appkey' => '456'
];
$client = new DefaultJttClient($assertArray['appid'], $assertArray['appkey']);

$resp = $client->execute($req);
$reqJson = $req->getReqJson();
print_r("请求报文:\n" . $reqJson);
print_r("\n返回响应报文:\n" . $resp);

```