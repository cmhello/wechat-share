# wechatShare

* [参考文档](http://mp.weixin.qq.com/wiki/7/aaa137b55fb2e0456bf8dd9148dd613f.html)
* 初始配置
    * 先登录微信公众平台进"公众号设置"的"功能设置"里填写"JS接口安全域名"（将下载的文件替代项目下的`MP_verify_3yUC8QZ398WEbX1e.txt`文件）
    * 获取微信公众号的的`appId`和`appSecret`
    * 将获取到的`appId`和`appSecret`替代`index.php`中`appId`和`appSecret`  
```
#!php

<?php
require_once "jssdk.php";
$jssdk = new JSSDK("appId", "appSecret");
$signPackage = $jssdk->GetSignPackage();
?>
```

* 使用（以在wordpress下使用为例）
    * 将`index.php`中`wx.onMenuShareTimeline`（分享至朋友圈）和`wx.onMenuShareAppMessage`（分享给好友）方法下的属性值改为你希望的的值
    * 将除`index.php`之外的所有文件上传至网站根目录下
    * 将`index.php`的所有内容添加到wordpress所使用主题的文件夹下（`%root%/wp-content/themes/主题名`）的`wp-footer.php`中

